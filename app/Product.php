<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session; 
use Request;

class Product extends Model {

 static public function getProducts($category_url, &$data)
    {
        $data['products'] = $data['category']=[];
        $sort = Request::input('sort');

        if ($category = Categorie::where('url', '=', $category_url)->first()) {

            $category = $category->toArray();
            $data['title']=$data['title']. ' | ' . $category['title'];
            $data['page_title'] = $category['title'] . ' products';
            $data['catUrl'] = $category['url'];
            $data['category'] = $category;

            if ($products = Categorie::find($category['id'])->products) {
                if($sort == 'pricelow'){
                    $products = $products->sortBy('price');
                }elseif ($sort == 'pricehigh'){
                    $products = $products->sortByDesc('price');
                }elseif ($sort == 'newitems'){
                    $products = $products->sortBy('updated_at');
                }
                $products = $products->toArray();
                $data['products'] = $products;

            }

        }
    } 
    
    
     public function category() { return $this->belongsTo('App\Categorie'); }

    static public function getItem($product_url, &$data) {

        
        $data['item'] = [];
      

        if ($product = Product::where('url', '=', $product_url)->first()) { 
             
            $product = $product->toArray(); 
             
            $data['item'] = $product;
            $data['title'] .= '|' . $product['title'];  
             
            
        }
    }

    static public function addToCart($id) {

        if ($product = self::find($id)) {

            $product = $product->toArray();
            if (!Cart::get($id)) {

                Cart::add($id, $product['title'], $product['price'], 1, []);
            }
        }
    }

    static public function updateCart($request) {

        if (!empty($request['op']) && !empty($request['id'])) {

            if ($product = Cart::get($request['id'])) {


                if ($request['op'] == 'plus') {

                    Cart::update($request['id'], ['quantity' => 1]);
                } elseif ($request['op'] == 'minus') {
                    $product = $product->toArray();

                    if ($product['quantity'] - 1 != 0) {

                        Cart::update($request['id'], ['quantity' => -1]);
                    }
                }
            }
        }
    }

    static public function removeItem($id) {

        Cart::remove($id);
    }

    static public function save_new($request) {

        $image_name = 'no_images.jpg';


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);

            $product = new self();
            $product->categorie_id = $request['categorie_id'];
            $product->title = $request['title'];
            $product->article = $request['article'];
            $product->url = $request['url'];
            $product->image = $image_name;
            $product->price = $request['price'];
            $product->save();
            Session::flash('sm', 'Product has been saved');
        }
    } 
    
    

    static public function update_product($request, $id) {

        $image_name = '';


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
        }
        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->url = $request['url'];

        if (!empty($image_name)) {

            $product->image = $image_name;
        }

        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product has been updated');
    }

}

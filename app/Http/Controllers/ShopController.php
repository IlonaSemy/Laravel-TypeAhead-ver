<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Categorie; 
Use App\Order;
use App\Product; 
use Cart,Session; 


class ShopController extends MainController{
    
   public function categories(){  
       \Cart::clear();
       self::$data['categories'] = Categorie::all()->toArray(); 
       self::$data['title'] .='|Shop categories'; 
       return view('content.categories', self::$data);
   } 
   
public function products(Request $request, $category_url, $sort= 'ASC'){
   Product::getProducts($category_url, self:: $data);
    $category = Categorie::where('url', '=', $category_url)->first(); 
    $products = Product::where('categorie_id', $category->id)->orderBy('price', $sort)->get(); 
    return view('content.products', self::$data ,['products' => $products, 'sort' => $sort]);  
    
}
   
   public function item($category_url, $product_url){ 
       
       Product::getItem($product_url, self::$data);   
        
       return view('content.item', self::$data);
   } 
   
   public function addToCart(Request $request){ 
       Product::addToCart($request['id']);
       
   } 
   
   public function checkout(){ 
       
       $cartCollection = Cart::getContent(); 
       $cart=$cartCollection->toArray();  
       sort($cart);
       self::$data['cart']=$cart;  
       self::$data['title'].='|Shop checkout';
       return view('content.checkout', self::$data);
   } 
   
   public function updateCart(Request $request){ 
       
       Product::updateCart($request);
   }
   
   public function removeItem(Request $request){ 
       Product::removeItem($request['id']);
   } 
   
   public function clearCart(){
       Cart::clear(); 
       return redirect('shop/checkout');
   }
   
   public function order(){ 
      
       if( Cart::isEmpty()){ 
           
           return redirect('shop');
       }else{ 
           
           if( Session::get('user_id')){  
               
               Order::save_order(); 
               return redirect('shop');
               
               
           }else{ 
               
               return redirect('user/signin?to=shop/checkout');
           }
       }
   }  
   
}


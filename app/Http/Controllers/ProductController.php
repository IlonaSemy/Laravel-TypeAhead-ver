<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;  
use App\Categorie; 
use App\Product;
Use Session;

class ProductController extends MainController{

function __construct(){
parent::__construct();
$this->middleware ('admincms');
}

public function index()
{ 
    self::$data['products'] = Product::all() ->toArray();
    return view ('cms.products', self::$data);
}


public function create()
{ 
self::$data['categories'] = Categorie::all() ->toArray();
return view ('cms.add_product', self::$data);
}

public function store(ProductRequest $request){ 
    Product::save_new($request); 
    return redirect('cms/products');
}


public function show($id)
{
self::$data['product_id'] = $id;
return view('cms.delete_product', self::$data);
}

public function edit($id){
self::$data['product'] = Product::find($id)->toArray(); 
self::$data['categories'] = Categorie::all() -> toArray();
return view('cms.edit_product', self::$data);

}


public function update(ProductRequest $request, $id) {

Product::update_product($request, $id);
return redirect('cms/products');
} 



public function destroy($id)
{
Product::destroy($id);
Session::flash('sm', 'Product has been deleted!');
return redirect('cms/products');
}
}

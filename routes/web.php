<?php 

#cns 
Route::get('cms/dashboard','CmsController@dashboard'); 
Route::resource('cms/menu','MenuController'); 
Route::resource('cms/content','ContentController'); 
Route::resource('cms/categories','CategoryController'); 
Route::resource('cms/products','ProductController'); 
Route::get('cms/orders','CmsController@orders');

#shop 
Route::get('shop', 'ShopController@categories'); 
Route::get('shop/checkout', 'ShopController@checkout');    
Route::get('shop/order', 'ShopController@order'); 
Route::get('shop/clear-cart', 'ShopController@clearCart');
Route::get('shop/remove-item', 'ShopController@removeItem');
Route::get('shop/update-cart', 'ShopController@updateCart');
Route::get('shop/add-to-cart', 'ShopController@addToCart'); 
Route::get('shop/{category_url}', 'ShopController@products');   
Route::get('shop/{category_url}/sorting-{sort?}', 'ShopController@products');
Route::get('shop/{category_url}/{product_url}', 'ShopController@item'); 
Route::get('/', 'PagesController@home');  


#search 

Route::get('search',array('as'=>'search','uses'=>'AutoCompleteController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@autocomplete'));

#user 

Route::get('user/signin', 'UserController@signin'); 
Route::post('user/signin', 'UserController@postSignin');  
Route::get('user/signup', 'UserController@signup');  
Route::post('user/signup', 'UserController@postSignup'); 
Route::get('user/logout', 'UserController@logout');  


#pages
Route::get('/', 'PagesController@home');
Route::get('{url}', 'PagesController@content');
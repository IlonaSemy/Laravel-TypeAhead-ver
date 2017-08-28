<?php

namespace App; 
use Session;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function products(){ 
        
        return $this->hasMany('App\Product');
    } 
    
    static public function save_new($request){  
        
        $image_name = 'no_images.jpg'; 
        
        if($request ->hasFile ('image') && $request-> file('image') ->isValid() ){ 
            
           $file = $request ->file('image'); 
           $image_name = date('Y.m.d.H.i.s')  . '-' . $file -> getClientOriginalName(); 
           $request -> file('image')->move( public_path(). '/images', $image_name);
        }
        
        $category = new self();   
        $category -> title = $request['title']; 
        $category -> article = $request['article']; 
        $category -> url = $request['url']; 
        $category -> image = $image_name;
        $category -> save(); 
        Session::flash ('sm', 'Category has been saved');
        
    } 
    
    static public function update_category($request, $id){  
        
          $image_name = ''; 
        
        if($request ->hasFile ('image') && $request-> file('image') ->isValid() ){ 
            
           $file = $request ->file('image'); 
           $image_name = date('Y.m.d.H.i.s')  . '-' . $file -> getClientOriginalName(); 
           $request -> file('image')->move( public_path(). '/images', $image_name);
        }
        
        $category = self::find($id);   
        $category -> title = $request['title']; 
        $category -> article = $request['article']; 
        $category -> url = $request['url'];  
        
        if(!empty($image_name)){ 
            
             $category -> image = $image_name;
             
        }
       
        $category -> save(); 
        Session::flash ('sm', 'Category has been updated');
        
    }
}

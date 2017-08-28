<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 
use Illuminate\Http\Request; 

class ProductRequest extends FormRequest{
    
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request) { 
        
        $product = !empty($request['product_id']) ? ',' . $request['product_id'] : '';
        
        return [ 
            
            'categorie_id' =>'required',
            'title' =>'required',  
            'price' => 'required| numeric',
            'url' =>'required|regex:/[\da-z]+$/|unique:products,url' . $product, 
            'image'=> 'image',
        ];
    } 
}

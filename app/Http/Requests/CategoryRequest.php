<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 
use Illuminate\Http\Request; 

class CategoryRequest extends FormRequest{
    
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request) { 
        
        $category = !empty($request['category_id']) ? ',' . $request['category_id'] : '';
        
        return [
            'title' =>'required', 
            'url' =>'required|regex:/[\da-z]+$/|unique:categories,url' . $category, 
            'image'=> 'image',
        ];
    } 
}

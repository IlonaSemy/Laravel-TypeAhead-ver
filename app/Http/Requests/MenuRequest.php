<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 
use Illuminate\Http\Request; 

class MenuRequest extends FormRequest{
    
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request) { 
        
        $menu = !empty($request['menu_id']) ? ',' . $request['menu_id'] : '';
        
        return [
            'link' =>'required', 
            'title' =>'required', 
            'url' =>'required|regex:/[\da-z]+$/|unique:menus,url' . $menu,
        ];
    } 
}

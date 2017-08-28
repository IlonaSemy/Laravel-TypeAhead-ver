<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 
use Illuminate\Http\Request; 

class ContentRequest extends FormRequest{
    
    public function authorize()
    {
        return true;
    }

    public function rules() { 
        
        
        return [
            'menu_id' =>'required', 
            'title' =>'required', 
           
        ];
    } 
}

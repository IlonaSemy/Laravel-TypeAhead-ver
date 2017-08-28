<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupPost extends FormRequest{
    
    public function authorize() {
        return true;
    }

   
    public function rules()
    {
        return [
           
            'name'=>'required|min:2|max:70|regex:/^[a-z]+(\s[a-z]+)*$/i', 
            'email'=>'required|email|unique:users,email', 
            'password'=>'required|min:6|max:10|regex:/^\S*(?=\S{6,10})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/|confirmed'
        ];
    } 
    
    public function messages(){ 
        
        return[ 
            'name.regex'=>'Name must contain letters only.'
        ];
    }
}

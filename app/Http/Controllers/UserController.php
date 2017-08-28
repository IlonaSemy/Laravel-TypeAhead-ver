<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Requests\SigninValidate; 
use App\Http\Requests\SignupPost; 
use App\User; 
use Session;

class UserController extends MainController{ 
    
    function __construct(){ 
        parent::__construct();  
        $this->middleware('signin',['except' =>['logout']]);
}
    public function signin(){ 
        self::$data['title'] .='|signin page'; 
        return view('form.signin', self::$data);
    } 
    
    public function signup(){ 
        self::$data['title'] .='|signup page'; 
        return view('form.signup', self::$data);
    }
    
    public function postSignin(SigninValidate $request){ 
        
        $to = !empty($request['to']) ? $request['to'] : '';
        
        if(User::validateUser($request['email'], $request['password']) ){ 
            
            return redirect($to);
        }else{ 
            
            self::$data['title'] .='|signin page'; 
             return view('form.signin', self::$data)->withErrors('Wrong email/password');
        }
        
    } 
    
    public function postSignup(SignupPost $request){ 
       User::save_user($request); 
       return redirect('user/signin');
        
    }
    
    public function logout(){ 
        
        Session::forget('user_id');
        Session::forget('user_name'); 
        Session::forget('is_admin'); 
        return redirect('user/signin');
    }
    
}

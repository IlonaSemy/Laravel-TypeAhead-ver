<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use DB,Hash,Session;

class User extends Model
{
    
    
    static public function validateUser($email,$password){ 
        
        $valid=false;  
        
        $sql= "SELECT * FROM users u "
                . "JOIN users_role ur ON u.id=ur.uid " 
                . "WHERE u.email=?"; 
        
        if( $user= DB::select($sql,[$email]) ){ 
            
            $user=$user[0];
            
            if(Hash::check($password,$user->password)){ 
                
                $valid =true; 
                
                if($user->role==3){ 
                    
                    Session::put('is_admin',true);
                    
                } 
                
                Session::put('user_id',$user->id); 
                Session::put('user_name',$user->name); 
                Session::flash('sm','Welcome back '. $user->name);
            }
        }
        
        return $valid;
    } 
    
    static public function save_user($request){ 
        
        $user= new self(); 
        $user->name=$request['name'];
        $user->email=$request['email']; 
        $user->password=bcrypt($request['password']); 
        $user->save();  
        $uid=$user->id;
        DB::insert("INSERT INTO users_role VALUES($uid, 4)");  
        Session::flash('sm','You sign up successfully');
        
    }
}

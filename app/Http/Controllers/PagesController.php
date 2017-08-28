<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Content;

class PagesController extends MainController 
{ 
    
    
    public function home(){   
        
       
        self::$data['title'] .='|Home page';
        return view ('content.home',self::$data);
    } 
    
    public function content($url){ 
        
      Content::getContents($url, self::$data);
      return view('content.content', self::$data);
    }

}

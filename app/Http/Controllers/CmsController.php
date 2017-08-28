<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Order;

class CmsController extends MainController
{ 
    
    function __construct(){ 
        parent::__construct(); 
        $this ->middleware ('admincms');
    }
    public function dashboard(){ 
        
        return view('cms.dashboard',self::$data);
        
    } 
    
    public function orders(){ 
        
        Order::get_orders(self::$data);
        return view('cms.orders', self::$data); 
        
    }
}

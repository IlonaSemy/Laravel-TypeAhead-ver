<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use Cart,Session,DB;

class Order extends Model{
  
    static public function save_order(){ 
        
        $cartCollection = Cart::getContent(); 
        $all_order = $cartCollection->toArray(); 
        $order= new self(); 
        $order ->user_id = Session::get('user_id'); 
        $order->data=  serialize($all_order); 
        $order ->total = Cart::getTotal(); 
        $order->save(); 
        Cart::clear(); 
        Session::flash('sm', 'Your order saved');
    } 
    
    static public function get_orders(&$data){ 
        
        $sql = "SELECT o.*,u.name FROM orders o "
            . "JOIN users u ON u.id = o.user_id " 
            . "ORDER BY o.created_at DESC ";
               
        $data['orders'] = DB::select($sql);
     }
}

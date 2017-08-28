<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
Use Session;

class Menu extends Model{
    
    public function contents(){ 
        
        return $this->hasMany('App\Content');
    } 
    
    static public function save_new($request){ 
        
        $menu = new self();  
        $menu->link = $request['link']; 
        $menu->title = $request['title']; 
        $menu->url = $request['url'];
        $menu ->save(); 
        Session::flash('sm','Menu has been saved!');
    } 
    
    static public function update_menu($request, $id){ 
        
        $menu = self::find($id);  
        $menu->link = $request['link']; 
        $menu->title = $request['title']; 
        $menu->url = $request['url'];
        $menu ->save(); 
        Session::flash('sm','Menu has been updated!');
    }
}

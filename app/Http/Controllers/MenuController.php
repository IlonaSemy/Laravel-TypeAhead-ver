<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Requests\MenuRequest; 
use App\Menu; 
Use Session;

class MenuController extends MainController{ 
    
      function __construct(){ 
        parent::__construct(); 
        $this ->middleware ('admincms');
}

    
    public function index()
    {
       return view ('cms.menu', self::$data);
    }

    
    public function create()
    {
        return view ('cms.add_menu', self::$data);
    }

    public function store(MenuRequest $request)
    {
     
        Menu::save_new($request); 
        return redirect('cms/menu');
    }

  
    public function show($id)
    { 
        self::$data['menu_id']= $id;
        return view('cms.delete_menu', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){ 
        self::$data['item'] = Menu::find($id)->toArray(); 
        return view('cms.edit_menu', self::$data);
        
    }

    
    public function update(MenuRequest $request, $id) {
        
        Menu::update_menu($request, $id); 
        return redirect('cms/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id); 
        Session::flash('sm', 'Menu has been deleted!'); 
        return redirect('cms/menu');
    }
}

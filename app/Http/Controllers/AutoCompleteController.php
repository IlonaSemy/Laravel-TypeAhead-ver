<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class AutoCompleteController extends MainController {
    
      public function search()
    {
        return view('master');
    }
    public function autocomplete(Request $request)
     {
        
if( !empty(request('query'))){
    
        $data = Product::select("title")
        ->where("title","LIKE","%{$request->input('query')}%") 
        
        
->get(); 
        
     $dataJson =$data->toJson();
        return view('master', compact('dataJson'));
}else{ 

  return view ('master', ['dataJson' => false]);
   
}

    }
}

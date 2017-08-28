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
        $data = Product::select("title as name")->where("title","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }
}
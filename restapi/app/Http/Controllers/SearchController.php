<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }
  
    public function result(Request $request)
    {
        $search = $request->input('search');

        
        
       
    $movies=Movie::where('title','LIKE', '%'.$search.'%')->get();
        if(!$movies->isEmpty()){
        return view('search_results',[ 'movies'=>$movies,]);}
        else{
            return view('search_results_failed');
        }
    }
}

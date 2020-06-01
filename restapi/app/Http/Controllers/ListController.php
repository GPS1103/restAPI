<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class ListController extends Controller
{
  public function index()
  {
    $movies=Movie::all();
      return view('list',
    [
        'movies'=>$movies,
    
    ]);
  }
}

<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AddController extends Controller
{

   
      public function create()
      {
          return view('add');    
      }

      public function store()
      {
          $data=request()->validate(
              [
                  'title'=>'required|string',
                  'country'=>'nullable',
                  'description'=>'nullable',
                  'cover'=>'required|image',
                  'type'=>'nullable|regex:/\w+/',
              ]
          );
     
        $imagePath=$data['cover']->store('uploads','public');
        $image=Image::make(public_path("storage/{$imagePath}"))->resize(200,200);
        $image->save();
        $movie= \App\Movie::Create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'country'=>$data['country'],
            'cover'=>$imagePath,
          ]);
          

         $id=$movie->id;
        preg_match_all("/\w+/", $data['type'],$array);
        $array2=$array[0];
        for($i=0;$i<sizeof($array2);$i++){
         \App\Movietype::Create([
            'type'=>$array2[$i],
            'movie_id'=>$id,
         ]);
          
          } 
          return redirect('/') ;  
      }
}

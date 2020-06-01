<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MovieController extends Controller
{
    public function index()
    {
      $movies=Movie::all();
        return view('list',
      [
          'movies'=>$movies,
      
      ]);
    }
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
    public function search()
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
    public function check()
    {
        return view('find');
    }
    public function find(Request $request)
    {
        $search = $request->input('search');

        
        
       
    $movies=Movie::where('title','LIKE', '%'.$search.'%')->get();
        if(!$movies->isEmpty()){
            return view('find_results',[ 'movies'=>$movies,]);
        }

        else{
            return view('search_results_failed');
        }
    }

    
    public function edit(Request $request)
    {
    
        $fraze='';
        $id=$request->input('id');
        $movies=Movie::find($id);
        foreach($movies->movietypes as $key=>$types){
        $fraze.=$types->type.' ';
        }
    
        return view('update_create',[ 'movies'=>$movies,
                                      'fraze'=>$fraze,                  ]);    
    }
    public function update(Movie $movie)
    {
        $data=request()->validate(
            [
                'title'=>'required|string',
                'country'=>'nullable',
                'description'=>'nullable',
                'cover'=>'nullable|image',
                'type'=>'nullable|regex:/\w+/',
                'id'=>'required'
            ]
        );
        $id=$data['id'];
      
        
       $movies=Movie::find($id);
       if(request('cover')){
        $imagePath=$data['cover']->store('uploads','public');
        $image=Image::make(public_path("storage/{$imagePath}"))->resize(200,200);
        $image->save();
          }
        else
        {
            $imagePath=$movies->cover;
            
        }
        $movies->update([
         'title'=>$data['title'],
         'description'=>$data['description'],
         'country'=>$data['country'],
          'cover'=>$imagePath,]);
        
          \App\Movietype::where('movie_id',$id)->delete();
          preg_match_all("/\w+/", $data['type'],$array);
          $array2=$array[0];
          
          for($i=0;$i<sizeof($array2);$i++){
            \App\Movietype::Create([
               'type'=>$array2[$i],
               'movie_id'=>$id,
            ]);
            }

           
            return redirect('/');
    }
    public function delete()
    {
        $movies=Movie::all();
        return view('delete_list',
      [
          'movies'=>$movies,
      
      ]);
    }
    public function sure(Request $request)
    {
        $id=$request->input('id');
        $title=$request->input('title');
    
        return view('sure',['id'=>$id, 'title'=>$title,]);
    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
       Movie::where('id',$id)->delete();
       \App\Movietype::where('movie_id',$id)->delete();
    return redirect("/movies/delete/list");
        
    }
}
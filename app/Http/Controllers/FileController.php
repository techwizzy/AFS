<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\Shelf;
use App\Http\Requests;

class FileController extends Controller
{
    //
    public function index()
    {
    	$files=Files::all();
    	return view('files.index', compact('files'));
    }

    public function show(Files $file)
    {
    	$file=$file;
    	return view('files.show', compact('file'));
    }
    public function create(){
    	$shelves=Shelf::all();
    	return view('files.create', compact('shelves'));
    
    }

    public function store(Request $request){
    $this->validate($request, [
        'filename' => 'required',
        'description' => 'required',
    ]);
        $destinationPath=base_path().'\Uploads';
    	$file=new Files;
    	$file->file_name=$request->filename;
    	$file->file_description=$request->description;
    	$file->shelf_id=$request->shelf_id;
    	$file->picture_name=$request->attachment;
    	/*if ($request->has('attachment')) {
		    $file->picture_name=$request->attachment;
		    if ($request->file('attachment')->isValid()) {
			  $request->file('attachment')->move($destinationPath, $request->attachment);
			}
          }*/

    	$file->save();
        return redirect('files')->with('success', 'The data file has been created successfully');
    	

    }

    public function edit(Files $file)
    {
    	$shelves=Shelf::all();
    	return view('files.edit',['file'=>$file, 'shelves'=>$shelves]);
    }

    public function update(Request $request, Files $file)
    {
    	# code...
    	
    	$file->file_name=$request->filename;
    	$file->file_description=$request->description;
    	$file->shelf_id=$request->shelf_id;
    	$file->picture_name=$request->attachment;
    	$file->update();
    	return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requests;
use App\Models\book;

class RequestController extends Controller
{
    public function ask(Request $request){
        $insert = new requests;
        $insert->req_title = $request->input('req_title');
        $insert->req_txt = $request->input('req_txt');
        $insert->volunteer_id = 1;
        $insert->user_id = 1;
        $insert->save();
        
        return view('/request');
    }

    public function displayAsk(){
        $result = requests::all();
        return view('ask', compact('result'));
    }

    public function responder(Request $request){
/** */
        $file= $request->file('file');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('files'), $filename);
        $file_store= $filename;
/** */
        $img= $request->file('img');
        $imgname=$img->getClientOriginalName();
        $img-> move(public_path('files'), $imgname);
        $img_store= $imgname;
/** */
        $insert = new book;
        $insert->book_name = $request->input('name');
        $insert->book_description = $request->input('Description');
        $insert->book_author = $request->input('Author');
        $insert->book_image = $img_store;
        $insert->book_file = $file_store;
        $insert->volunteer_id = "1";
        $insert->save();
        return redirect('/ask');
    }
}
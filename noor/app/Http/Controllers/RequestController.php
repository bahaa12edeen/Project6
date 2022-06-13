<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requests;
use App\Models\responds;

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
        $insert = new responds;
        $insert->volunteer_id = 1;
        $insert->respond_txt = $request->input('message');
/** */
        $file= $request->file('file');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('files'), $filename);
        $file_store= $filename;
/** */
        $insert->respond_file = $file_store; //$request->input('file')
        $insert->req_id = 1;
        $insert->save();
        
        return redirect('/ask');
    }
}
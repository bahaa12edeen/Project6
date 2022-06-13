<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\book;
use App\Models\responds;

class BookController extends Controller
{
    public function index(){
        $data = book::all();
        $id = ['ip' => 0];
        return view('book', compact('data', 'id'));
    }
    public function GetBook(Request $request){
        $search = $request->input('search');
        if($search != ""){
            $data = DB::table('books')->where('book_name', $search)->get();
        }else{
            $data = responds::all();
        }
        return view('book', compact('data', 'id'));
    }

    public function fileUp(Request $request){
        $create=new book();
        $file= $request->file('file');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('files'), $filename);
        $file_store= $filename;

        $create->book_name = "go";
        $create->book_description ="go";
        $create->book_author ="go";
        $create->book_image =$file_store;
        $create->volunteer_id =1;

        $create->save();
        return redirect();
        }


}
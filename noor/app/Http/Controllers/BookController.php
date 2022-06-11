<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\book;

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
            $id = ['ip' => 0];
        }else{
            $data = book::all();
            $id = ['ip' => 0];
        }
        return view('book', compact('data', 'id'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyzeController extends Controller
{
    public function index(){
        return view('birdfileupload');
    }

    public function store(Request $request){
        dd($request->all());
        $request->file('file')->storeAs('.', 'upload_bird_file.pdf');
    }
}

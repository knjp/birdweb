<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyzeController extends Controller
{
    public function index(){
        return view('birdfileupload');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->file('file')->storeAs('./yolo/upload/', 'bird_file.mp4', ['disk' => 'public']);
        return redirect('/');
    }

    public function downloadCSV(){
        $file = storage_path('app/public/yolo/' . 'birdstatus.csv');
        return response()->download($file);
    }
}

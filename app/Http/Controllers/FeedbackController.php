<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('user/feedback');
    }
    public function submit(Request $request){

    }
}

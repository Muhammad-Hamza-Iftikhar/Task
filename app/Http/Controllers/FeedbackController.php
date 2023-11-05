<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index(){
        return view('user/feedback');
    }
    public function show(){
        return "ToDo";
    }
    public function create(Request $request){
        try {
            DB::beginTransaction();
            $feedback = feedback::create([
                'title' => $request->title,
                'category' => $request->category,
                'description' => $request->description,
            ]);
            DB::commit();
            return response('success');
        }
        catch (\Exception $e){
            DB::rollBack();
            return response('failed');
        }
    }
}

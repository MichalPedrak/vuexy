<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){

        return Task::all();
    }
    public function store(Request $request){
        $data = $request->all();


        Task::create([
            'title' => $data['task']['title'],
            'user_id' => '534',
            'content' => $data['task']['description'],
            'completed' => $data['task']['isCompleted'],
        ]);


    }

}

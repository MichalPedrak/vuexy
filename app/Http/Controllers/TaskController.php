<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index($q=null, $sortBy=null){


        $sortByTitleDesc = $sortBy == 'title-desc' ? 'title-desc' : null;
        $sortByTitleAsc = $sortBy == 'title-asc' || $sortBy == null ? 'title-asc' : null;


        if($q !== null && $q !== "null"){
            return Task::with('user')
                ->when($q, function($query, $q) {
                $query
                    ->where('title', 'like', '%' . $q . '%')
                    ->orWhere('content', 'like', '%' . $q . '%');
                })
                ->get();
        } else {
            return Task::with('user')
                ->when($sortByTitleDesc, function($query, $sortByTitleDesc){
                    $query->orderByDesc('title');})
                ->when($sortByTitleAsc, function($query, $sortByTitleAsc){
                    $query->orderBy('title');})
                ->get();
        }
    }
    public function store(Request $request){
        $data = $request->all();


        Task::create([
            'title' => $data['task']['title'],
            'user_id' => '1',
            'content' => $data['task']['description'],
            'completed' => $data['task']['isCompleted'],
        ]);


    }

}

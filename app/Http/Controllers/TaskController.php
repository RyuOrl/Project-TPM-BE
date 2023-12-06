<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{


    public function home(){
        $tasks_list = Task::all();
        return view('/home', ['tasks_list' => $tasks_list]);
    }
    public function create(){
        return view('/add');
    }

    public function store(Request $request){

        $test = $request->validate([
            'task'=>'required',
            'due'=>'required',
            'description'=> 'required'
        ]);
        $mes = "";
        if(!$test){
            $mes = "Every component must be filled in";
            return view('add', ["message" => $mes]);
        }

        Task::create([
            'task' => $request -> task,
            'due' => $request -> due,
            'description' => $request ->description
      ]);

      return redirect(route('task.home'));
    }
}

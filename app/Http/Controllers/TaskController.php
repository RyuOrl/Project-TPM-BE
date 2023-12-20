<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{


    public function home(){
        $tasks_list = Task::all();
        return view('/home', ['tasks_list' => $tasks_list]);
    }
    public function create(){
        $subject = Subject::all();
        return view('/add', compact('subject'));
    }

    public function store(Request $request){
        
        $request->validate([
            'task_input'=>'required|unique:App\Models\Task,task|max:255',
            'task_image_input' => 'required|mimes:jpg,png',
            'subject_input' => 'required',
            'due_input'=>'required',
            'description_input'=> 'required'
        ]);

        $path = $request->file('task_image_input');

        $data = Task::create([
            'task' => $request -> task_input,
            'task_image_path' =>$request ->task_image_input,
            'subject_id' => $request->subject_input,
            'due' => $request -> due_input,
            'description' => $request ->description_input
      ]);

        $fileName = $data->id . $path->getClientOriginalName();
        $path->storeAs(
            'public/image_task', 
            $fileName);
        $data->task_image_path = 'image_task/' . $fileName;
        $data->save();

      return redirect('/home');
    }

    public function updatePage($id){
        $tasks = Task::findOrFail($id);
        $subject = Subject::all();
        return view('update', compact('tasks', 'subject'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'task_input'=>'required',
            'task_image_input' => 'required|mimes:jpg,png',
            'subject_input' => 'required',
            'due_input'=>'required',
            'description_input'=> 'required'
        ]);

        $task = Task::find($id);
        Storage::delete('/public/'.$task->task_image_path);

        $path = $request->file('task_image_input');

        Task::findOrFail($id)->update([
            'task' => $request -> task_input,
            'task_image_path' =>$request ->task_image_input,
            'due' => $request -> due_input,
            'description' => $request ->description_input,
            'subject_id' => $request->subject_input
        ]);

        $data = Task::find($id);
        $fileName = $data->id . $path->getClientOriginalName();
        $path->storeAs(
            'public/image_task', 
            $fileName);
        $data->task_image_path = 'image_task/' . $fileName;
        $data->save();

        return redirect('/home');
    }

    public function delete($id){
        
        $task = Task::find($id);
        if($task){
            Storage::delete('/public/'.$task->task_image_path);
        }
        Task::destroy($id);
        

        return redirect('/home');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class taskscontroller extends Controller
{
    public function store(Request $request){
      
        $task=new Task;

        $this->validate($request,[
            'task'=>'required|max:100|min:5',

        ]);

        $task->task=$request->task;
        $task->save();

        $data=Task::all();
        return view('tasks')->with('tasks',$data);

      
    }


    public function updatetaskascomplede($id){

        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();

        return redirect()->back();
    }

    public function updatetaskasnotcomplede($id){

        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();

        return redirect()->back();
    }

    public function deletetask($id){

        $task=Task::find($id);
        $task->delete();

        return redirect()->back();

    }

  public function updatetaskview($id){

        $task=Task::find($id);
        return view('updatetask')->with('taskdata',$task);


  }
  public function updatetask(Request $request){
    $id=$request->id;
    $task=$request->task;
    $data=Taks::find($id);
    $data->task=$task;
    $data->save();
    $datas->Task::all();
    return view('tasks')->with('task',$data);


  }
}
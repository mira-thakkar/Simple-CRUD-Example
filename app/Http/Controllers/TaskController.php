<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getIndex(Request $request){
//        Index Page of Tasks
        $data['tasks'] = Task::select('id','title','created_at')->paginate(5);
        return view('task.index',$data);
    }
    public function getDetail(Request $request,$id){
//        Page to Display all details of a Task
        $data['task'] = Task::find($id);
        return view('task.detail',$data);
    }
    public function getAdd(Request $request){
//        Page to add will be served!\
        return view('task.add');
    }
    public function postAdd(Request $request){
//        Task will be added by AJAX or Form Submit!
    }
    public function getEdit(Request $request,$id){
//        Page with prefilled form will be served

        $data['task'] = Task::find($id);
        return view('task.edit',$data);
    }
    public function postEdit(Request $request,$id){
//        Task will be edited by AJAX or Form Submit
    }
    public function postDelete(Request $request,$id){
//        AJAX or Blank form with CSRF token will be submitted to delete a Task
    }
}
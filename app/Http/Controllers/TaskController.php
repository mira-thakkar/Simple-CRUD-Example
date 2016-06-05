<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getIndex(Request $request){
        $data['tasks'] = Task::all();
        return $data;
    }
}
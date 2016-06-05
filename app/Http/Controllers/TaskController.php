<?php

namespace App\Http\Controllers;


use App\Http\Requests\Request;
use App\Task;

class TaskController extends Controller
{
    public function getIndex(Request $request){
        $data['tasks'] = Task::all();
        return $data;
    }
}
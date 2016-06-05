@extends('layouts.master')

@section('content')

    <h2>Task Detail</h2>
    <p>This is the complete detail of the task:</p>
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <td>{{$task->title}}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{$task->task}}</td>
        </tr>
        <tr>
            <th>Added on</th>
            <td>{{$task->created_at->diffForHumans()}}</td>
        </tr>
        <tr>
            <th>Last Activity on</th>
            <td>{{$task->updated_at->diffForHumans()}}</td>
        </tr>
        <tr>
            <th>Want to Change Details?</th>
            <td>
                <a class="btn btn-default" href="{{url('tasks/edit/'.$task->id)}}">Edit</a>
            </td>
        </tr>
        <tr>
            <th>Remove this Task?</th>
            <td>
                {!! Form::open(['url'=>'tasks/delete/'.$task->id]) !!}
                <button type="submit" class="btn btn-danger" href="">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        </tbody>
    </table>
@stop
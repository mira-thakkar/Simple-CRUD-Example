@extends('layouts.master')

@section('content')

    <h2>Tasks</h2>
    <span class="pull-right">
        <a class="btn btn-primary" href="{{url('tasks/add')}}">Add New</a>
    </span>
    <p>This are the available tasks:</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Sr. No.</th>
            <th>Title</th>
            <th>Added on</th>
            <th>More</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $key => $task)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->created_at->diffForHumans()}}</td>
                <td>
                    <a class="btn btn-default" href="{{url('tasks/detail/'.$task->id)}}">View</a>
                    <a class="btn btn-default" href="{{url('tasks/edit/'.$task->id)}}">Edit</a>
                    {!! Form::open(['url'=>'tasks/delete/'.$task->id]) !!}
                </td>
                <td>
                    <button type="submit" class="btn btn-danger" href="">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
@extends('layouts.master')

@section('content')

    <h2>Task Edit</h2>
    <p>Here you can edit the task detail:</p>
    {!! Form::open(array('method'=>'post')) !!}
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <td>{!! Form::text('title',$task->title) !!}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{!! Form::text('title',$task->task) !!}</td>
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
    <button class="btn btn-primary pull-right">Update Details</button>
    {!! Form::close() !!}

@stop
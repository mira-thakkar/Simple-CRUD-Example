@extends('layouts.master')

@section('content')

    <h2>Task Add</h2>
    <p>Here you can edit the task detail:</p>
    {!! Form::open(array('method'=>'post')) !!}
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <td>{!! Form::text('title',null,array('class'=>'form-control')) !!}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{!! Form::text('title',null,array('class'=>'form-control')) !!}</td>
        </tr>
        </tbody>
    </table>
    <button class="btn btn-primary pull-right">Add Task</button>
    {!! Form::close() !!}

@stop
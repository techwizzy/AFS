@extends('layouts.app')

@section('content')
<div class="container">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
         
            <div class="panel panel-default">
                <div class="panel-heading"><h4 align="center">{{$file->file_name}}</h4></div>
            
                <div class="panel-body">
                     <ul class="list-group">
                      <li class="list-group-item">File Name: {{$file->file_name}}</li>
                      <li class="list-group-item">Description: {{$file->file_description}}</li>
                      <li class="list-group-item">Location: {{$file->shelf_id}}</li>
                      <li class="list-group-item">Created on: {{$file->created_at}}</li>
                      <li class="list-group-item">Last update: {{$file->updated_at}}</li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
     <div class=""><a href="{{ url('/files/'.$file->id.'/edit')}}" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"> Edit</span></a>
     </div>
     </div>
    </div>
</div>
@endsection

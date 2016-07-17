@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div style="float:right; padding:10px;"><a href="{{ url('/create_file') }}" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Create new File</a></div>
        </div>

 </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
         @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>id</th>
                             <th>file name</th>
                             <th>description</th>
                             <th>shelf</th>
                             <th>created on </th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($files as $file)
                           <tr>
                                <td>{{ $file->id }}</td>
                                <td><a href="{{ url('/files/'.$file->id) }}">{{ $file->file_name }}</a></td>
                                <td>{{ $file->file_description }}</td>
                                <td>{{ $file->shelf_id }}</td>
                                <td>{{ date('d/m/Y H:m:i A', strtotime($file->created_at)) }}</td>
                           </tr>
                         @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

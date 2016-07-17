@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
         
            <div class="panel panel-default">
                <div class="panel-heading"><h4 align="center">Edit File {{ $file->file_name }}</h4></div>
             
                <div class="panel-body">
                 <form class="form-horizontal" role="form" method="POST" action="/files/{{$file->id }}/update">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">File name</label>
                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="filename" name="filename" value="{{$file->file_name }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="description">{{$file->file_description }}</textarea>
                    </div>
                  </div>
                    <div class="form-group">
                    <label  class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="shelf_id">
                      @foreach($shelves as $shelf)
                         <option value="{{ $shelf->id }}"> {{ $shelf->note }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label  class="col-sm-2 control-label">Attachment</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" name="attachment" id="exampleInputFile">
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                  </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

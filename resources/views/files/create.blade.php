@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
         
            <div class="panel panel-default">
                <div class="panel-heading"><h4 align="center">Create New File</h4></div>
            
                <div class="panel-body">
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                 <form class="form-horizontal" role="form" method="POST" action="{{ url('store_file') }}">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">File name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="filename" name="filename" value="{{old('filename')}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="description">{{ old('description')}}</textarea>
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
                      <button type="submit" class="btn btn-primary">Create File</button>
                    </div>
                  </div>
                  </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

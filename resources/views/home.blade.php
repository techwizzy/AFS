@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <div class="col-xs-3 col-md-3">
                <a href="{{ url('/files') }}" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Files
                </a>

              </div>
               <div class="col-xs-3 col-md-3">
                <a href="{{ url('/home') }}" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Checkins
                </a>

              </div>
               <div class="col-xs-3 col-md-3">
                <a href="{{ url('/home') }}" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Checkouts
                </a>

              </div>
               <div class="col-xs-3 col-md-3">
               <div class="dropdown">
                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Settings
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                 <li><a href="">User management</a></li>
                 <li><a href="">Client managemnt</a></li>
                 <li><a href="">Shelves Mangemenent</a></li>
                </ul>
              </div>
              </div>
                </div>
            </div>
             
        </div>
    </div>


</div>


@endsection

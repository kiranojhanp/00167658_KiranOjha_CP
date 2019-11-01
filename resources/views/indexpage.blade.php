@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
       {{-- @guest
              <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
              @else --}}
       <div class="jumbotron text-center">
              <p>This is the laravel application from the that lets you search Clinic around you</p>
              {!! Form::open() !!}
              <div class="form-group">
                     {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Enter the name of Clinic'])}}
              </div>
              {{Form::submit('Search',['class'=>'btn btn-primary'])}}
              {!! Form::close() !!}
              {{-- @endguest --}}
       </div>
       {{-- @endguest --}}
</div>

@endsection
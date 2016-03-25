@extends('layouts.master')

@section('title')
    Cat generator
@stop

@section('content')

    <h1>Get a random cat photo</h1>

    <form method='POST' action='/cat/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>* Width of Photo:</label>
           <input type='number' id='width' name='width' value='{{ old('width') }}'>
           <div class='error'>
             {{ $errors->first('width') }}
           </div>
        </div>

        <div class='form-group'>
           <label>* Height of Photo:</label>
           <input type='number' id='height' name='height' value='{{ old('height') }}'>
           <div class='error'>
            {{ $errors->first('height') }}
           </div>
        </div>

        <button type="submit" class="btn btn-primary">Show me a cat photo</button>

        
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>

    <h2><a href="/cat/create">Get a new cat!</a></h2>

    @if(isset($cat))

      <img src="{{ $cat }}" alt="Random cat">
    @endif


@stop
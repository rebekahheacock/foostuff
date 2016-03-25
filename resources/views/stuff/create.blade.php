@extends('layouts.master')

@section('title')
    Add a new thing
@stop

@section('content')

    <h1>Add a new thing</h1>

    <form method='POST' action='/stuff/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>* Name of Thing:</label>
           <input
               type='text'
               id='thing'
               name='thing'
               value='{{ old('thing') }}'
           >
           <div class='error'>
            <ul>
              @foreach($errors->get('thing') as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
           </div>
        </div>

        <div class='form-group'>
           <label>* Type of Thing:</label>
           <input
               type='text'
               id='type'
               name='type'
               value='{{ old('type') }}'
           >
           <div class='error'>{{ $errors->first('type') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Add thing</button>

        
        <ul class=''>
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


@stop
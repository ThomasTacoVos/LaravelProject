@extends('layouts.master')

@section('content')

    {!! Form::open(['url' => 'categories', 'method' => 'POST']) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('category', 'category'); !!}
        {!! Form::text('category', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'description'); !!}
        {!! Form::textarea('description', '',['class' => 'form-control', 'rows' => '3']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-default']); !!}
        {!! Form::close() !!}
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
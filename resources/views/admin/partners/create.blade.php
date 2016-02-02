@extends('layout/app')

@section('content')
    <h1>Partners</h1>
    <div>
        {!! Form::open(['url' => 'partners'])  !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('type', 'Type:') !!}
                {!! Form::text('type', null, ['class' => 'form-control']) !!}
            </div>

            <div>
                {!! Form::submit('Add Partner', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop
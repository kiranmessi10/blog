@extends('main')


@section('title', '| Edit Title')

@section('content')
    {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}
    
            {{ Form::label('name', 'Title:') }}
            {{Form::text('name', null, ['class' => 'form-control']) }}<br>
            
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection

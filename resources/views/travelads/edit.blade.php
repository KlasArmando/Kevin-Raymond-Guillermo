@extends('layouts.master');
@section('content');

{!! Form::open(array('url' => 'travelads/'.$travelad->id, 'method' => 'PATCH')) !!}

    {!! Form::text('name', $travelad->name, array('')) !!}
    {!! Form::text('title', $travelad->title, array('')) !!}
    {!! Form::text('description', $travelad->description, array('')) !!}

    {!! Form::submit('Submit!', array('')) !!}

    {!! Form::close() !!}

@endsection
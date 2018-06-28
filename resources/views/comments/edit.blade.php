@extends('layouts.master');
@section('content');

{!! Form::open(array('url' => 'comments/' .$comment->id, 'method' => 'PUT')) !!}

{!! Form::text('name', $comment->name, array('')) !!}
{!! Form::text('comment', $comment->comment, array('')) !!}

{!! Form::submit('Submit!', array('')) !!}

{!! Form::close() !!}

@endsection
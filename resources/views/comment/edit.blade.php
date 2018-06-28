@extends('style.shopstyle');
@extends('layout');
@section('content4');

{!! Form::open(array('url' => 'comment/'.$comment->id, 'method' => 'PATCH')) !!}

{!! Form::text('name',         $comment->name, array('')) !!}
{!! Form::text('email',     $comment->description, array('')) !!}
{!! Form::text('comment',         $comment->link, array('')) !!}

{!! Form::submit('Submit!', array('')) !!}

{!! Form::close() !!}

@endsection


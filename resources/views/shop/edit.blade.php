@extends('layout');
@section('content4');

{!! Form::open(array('url' => 'shop/'.$shop->id, 'method' => 'PATCH')) !!}

{!! Form::text('name',         $shop->name, array('')) !!}
{!! Form::text('description',     $shop->description, array('')) !!}
{!! Form::text('link',         $shop->link, array('')) !!}

{!! Form::submit('Submit!', array('')) !!}

{!! Form::close() !!}

@endsection


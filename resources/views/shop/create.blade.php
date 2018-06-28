@extends('style.shopstyle');
@section('content4')

    <h1>Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{route('shop.store')}}" method="post">

    @csrf
    Name:<br>
    <input type="text" name="name" value="">
    <br><br>
    Desription<br>
    <input type="text" name="description" value="">
    <br><br>
    Link:<br>
    <input type="text" name="link" value="">
    <br><br>
    <input type="submit" value="Make">

</form>



@endsection
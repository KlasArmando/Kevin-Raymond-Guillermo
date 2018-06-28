@extends('style.shopstyle');
@extends('layout');
@section('content4')

    <h1>Create Comment</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comment.store')}}" method="post">

        @csrf
        Name:<br>
        <input type="text" name="name" value="">
        <br><br>
        Email<br>
        <input type="text" name="email" value="">
        <br><br>
        Comment<br>
        <input type="text" name="comment" value="">
        <br><br>
        <input type="submit" value="Make">

    </form>



@endsection
@extends('layouts.app')
@extends('layouts/aboutYouForm')

@section('content')
  <div class="page">
    <!DOCTYPE html>
    <html>
      <div class="leftcolumn">

        {{-- @foreach ($blogposts as $post)
          <div class="card">
            <h2>{{$post->title}}</h2>
            <h5>{{$post->description}}, {{$post->created_at}}</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>
              <button>
                <a href='blog/{{$post->id}}'>
                  Click for full blog
                </a>
              </button>
            </p>
          </div>
        @endforeach --}}

      </div>
    </html>
  </div>
@endsection

{{-- @section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div>
@endsection --}}

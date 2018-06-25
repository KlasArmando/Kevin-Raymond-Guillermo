@extends('./layouts.app')
@extends('./style/blogpost')
@section('content2')


<h1>{{$user->name}}<h1>
  <table border="1px">
    <tr>
      <th>Name</th>
      <th>Username</th>
      <th>Email</th>
    </tr>
    <tr>
      <td> {{$user->name}}     </td>
      <td> {{$user->username}} </td>
      <td> {{$user->email}}    </td>
      <td>
        <button>
          <a href="{{$user->id}}/edit">
            Edit
          </a>
        </button>
      </td>
      <td>
        <button>
          <a href="./">
            Terug
          </a>
        </button>
      </td>
    </tr>
  </table>
@stop

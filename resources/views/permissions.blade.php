@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Users Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Role</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($user as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['role_id']}}</td>
   <td><a href="{{action('UserController@edit', $row['id'])}}">Edit</a></td>
    <td>
        <form method="post" class="delete_form" action="{{action('UserController@destroy', $row['id'])}}">
         {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE" />
         <button type="submit" class="btn btn-danger">Delete</button>
        </form>
       </td>-->
    <td></td>
   </tr>
   @endforeach -->
  </table>
 </div>
</div>

@endsection

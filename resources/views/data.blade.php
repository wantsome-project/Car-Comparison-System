@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Cars Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <td><a href="{{action('AddController@index')}}"class="btn btn-primary">Add</a></td>
  <div align="right">
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($car as $row)
   <tr>
    <td>{{$row['Brand']}}</td>
    <td>{{$row['Model']}}</td>
    <td><img src="/images/{{ $row['iMAGE'] }}" height="90px" width="160px" /></td>
    <td><a href="{{action('DataController@edit', $row['id'])}}">Edit</a></td>
    <td>
        <form method="post" class="delete_form" action="{{action('DataController@destroy', $row['id'])}}">
         {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE" />
         <button type="submit" class="btn btn-danger">Delete</button>
        </form>
       </td>
    <td></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection

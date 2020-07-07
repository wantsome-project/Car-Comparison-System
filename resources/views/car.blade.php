@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Car Data</h3>
  <br />

  <table class="table table-bordered table-striped">
   <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Image</th>
   </tr>

   <tr>
    <td>{{$car['Brand']}}</td>
    <td>{{$car['Model']}}</td>
    <td><img src="/images/{{ $car['iMAGE'] }}" height="90px" width="160px" /></td>
    <td></td>

    <a class="nav-link" href="{{ route('post.create') }}">Create Post</a>
   </tr>
  </table>
 </div>
</div>

@endsection

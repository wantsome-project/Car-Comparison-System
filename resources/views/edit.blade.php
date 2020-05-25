@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Car</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('DataController@update', $id ?? '')}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PUT" />
   <div class="form-group">
    <input type="text" name="Brand" class="form-control" value="{{$car->Brand}}" placeholder="Enter Brand" />
   </div>
   <div class="form-group">
    <input type="text" name="Model" class="form-control" value="{{$car->Model}}" placeholder="Enter Model" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection

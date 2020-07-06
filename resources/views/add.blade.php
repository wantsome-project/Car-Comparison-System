@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('admin/add')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="Brand" class="form-control" placeholder="Enter Brand" />
   </div>
   <div class="form-group">
    <input type="text" name="Model" class="form-control" placeholder="Enter Model" />
   </div>
   <div class="form-group">
    <input type="longtext" name="Motorizare" class="form-control" placeholder="Enter Motorizare" />
   </div>
   <div class="form-group">
   <input type="integer" name="Locuri" class="form-control" placeholder="Enter Locuri" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Consum" class="form-control" placeholder="Enter Consum" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Transmisie" class="form-control" placeholder="Enter Transmisie" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Putere" class="form-control" placeholder="Enter Putere" />
   </div>
   <div class="form-group">
   <input type="longtext" name="An_aparitie" class="form-control" placeholder="Enter an aparitie" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Pret_de_baza" class="form-control" placeholder="Enter pret de baza" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Combustibil" class="form-control" placeholder="Enter Combustibil" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Caroserie" class="form-control" placeholder="Enter Caroserie" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Grad_de_poluare" class="form-control" placeholder="Enter grad de poluare" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Tractiune" class="form-control" placeholder="Enter tractiune" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Dotari_standard" class="form-control" placeholder="Enter dotari standard" />
   </div>
   <div  class="form-group">
   <!--<input type="longtext" name="iMAGE" class="form-control" placeholder="Enter image location" />-->
        <form action="/upload" method="post">
            <input type="file" name="iMAGE"/>


   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   <!--</div>
  </form>
    <div class="card-body">
        <form action="/upload" method="post">
            <input type="file" name="image"/>
            <input type="submit" value="Upload"/>




 </div>
</div>
@endsection

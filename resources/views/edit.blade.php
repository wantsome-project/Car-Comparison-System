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
    <input type="longtext" name="Motorizare" class="form-control" value="{{$car->Motorizare}}" placeholder="Enter Motorizare" />
   </div>
   <div class="form-group">
   <input type="integer" name="Locuri" class="form-control" value="{{$car->Locuri}}" placeholder="Enter Locuri" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Consum" class="form-control" value="{{$car->Consum}}" placeholder="Enter Consum" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Transmisie" class="form-control" value="{{$car->Transmisie}}" placeholder="Enter Transmisie" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Putere" class="form-control" value="{{$car->Putere}}" placeholder="Enter Putere" />
   </div>
   <div class="form-group">
   <input type="longtext" name="An_aparitie" class="form-control" value="{{$car->An_aparitie}}" placeholder="Enter an aparitie" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Pret_de_baza" class="form-control" value="{{$car->Pret_de_baza}}" placeholder="Enter pret de baza" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Combustibil" class="form-control" value="{{$car->Combustibil}}" placeholder="Enter Combustibil" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Caroserie" class="form-control" value="{{$car->Caroserie}}" placeholder="Enter Caroserie" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Grad_de_poluare" class="form-control" value="{{$car->Grad_de_poluare}}" placeholder="Enter grad de poluare" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Tractiune" class="form-control" value="{{$car->Tractiune}}" placeholder="Enter tractiune" />
   </div>
   <div class="form-group">
   <input type="longtext" name="Dotari_standard" class="form-control" value="{{$car->Dotari_standard}}" placeholder="Enter dotari standard" />
   </div>
   <div  class="form-group">
        <form action="/upload" method="post">
            <input type="file" name="iMAGE"/>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection

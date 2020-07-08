@extends('layouts.app')

@section('tabel')
@foreach($car as $car)
   <table class="table table-bordered table-striped" style="width:50%; float:left">
    <tr>
        <th>Image</th>
        <td><img src="/images/{{ $car['iMAGE'] }}" height="135px" width="240px" /></td>
        <td></td>
       </tr>
    <tr>
         <th>Brand</th>
         <td>{{$car['Brand']}}</td>
    </tr>
        <tr>
         <th>Model</th>
         <td>{{$car['Model']}}</td>
        </tr>
        <tr>
            <th>Motorizare</th>
            <td>{{$car['Motorizare']}}</td>
           </tr>
           <tr>
            <th>Locuri</th>
            <td>{{$car['Locuri']}}</td>
           </tr>
           <tr>
            <th>Consum</th>
            <td>{{$car['Consum']}}</td>
           </tr>
           <tr>
            <th>Transmisie</th>
            <td>{{$car['Transmisie']}}</td>
           </tr>
           <tr>
            <th>Putere</th>
            <td>{{$car['Putere']}}</td>
           </tr>
           <tr>
            <th>An aparitie</th>
            <td>{{$car['An_aparitie']}}</td>
           </tr>
           <tr>
            <th>Pret de baza </th>
            <td>{{$car['Pret_de_baza']}}</td>
           </tr>
           <tr>
            <th>Combustbilil</th>
            <td>{{$car['Combustibil']}}</td>
           </tr>
           <tr>
            <th>Caroserie</th>
            <td>{{$car['Grad_de_poluare']}}</td>
           </tr>
           <tr>
            <th>Tractiune</th>
            <td>{{$car['Tractiune']}}</td>
           </tr>
           <tr>
            <th>Dotari Standard </th>
            <td>{{$car['Dotari_standard']}}</td>
           </tr>
       </table>
      @endforeach

      @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                   <div class="card-header">Pagina de comparat</div>

                        <div class="card-body">
                           @if (session('status'))
                             <div class="alert alert-success" role="alert">
                                 {{ session('status') }}
                             </div>
                           @endif
                          <div class="content">
                            <div class="title m-b-md">
                               <h3> Aici puteti compara masinile alese: </h3>
                            </div>
                          </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection





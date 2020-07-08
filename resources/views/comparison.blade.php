@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  Here are the two vehicle you choose
<div class="row">
 <div class="col-md-12">

@foreach($car as $car)
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
        </tr>
       </table>
@endforeach

</div>

@endsection

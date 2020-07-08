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
                  Choose which Vehicle you want to compare
<div class="row">
 <div class="col-md-12">





    @foreach($car as $row)
    <form action={{action('DataController@compare', $row['id'])}}>
        <div class="form-group">
           </div>
        <label for="car">Choose a car:</label>

        <select id="car" name="car">
            @foreach($car  as $row)
            <option value={{$row['id']}}>{{$row['Brand']}} {{$row['Model']}}</option>
          @endforeach

        </select>
          <select id="car1" name="car1">
            @foreach($car  as $row)
            <option value={{$row['id']}}>{{$row['Brand']}} {{$row['Model']}}</option>
          @endforeach

        </select>
        <input type="submit">
      </form>@endforeach

    </form>

  <br />
  <h3 align="center">Cars Data</h3>
  <br />
  <table class="table table-bordered table-striped">
   <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Image</th>
    <th>View</th>


   @foreach($car  as $row)
   <tr>
    <td>{{$row['Brand']}}</td>
    <td>{{$row['Model']}}</td>
    <td><img src="/images/{{ $row['iMAGE'] }}" height="90px" width="160px" /></td>
    <td><a href="{{action('DataController@show', $row['id'])}}">View</a></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection

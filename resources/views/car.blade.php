@extends('layouts.app')

@section('content')

<div class="column">
 <div class="col-md-12">
  <br />
  <h2 align="center">Specificații Mașină</h2>
  <br />

  <table class="table table-bordered table-striped">
    <tr>
        <th>Image</th>
        <td><img src="/images/{{ $car['iMAGE'] }}" height="90px" width="160px" /></td>
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
    </div>
</div>







   <div class="card">
    <div class="card-header"><h3 align="center">Recenzii</h3></div>
    <div class="card-body">
    <?php
    $cars= $car->id;?>
    <?php $reviews = DB::table('reviews')->get();?>

    @foreach($reviews as $review)
    <ul><?php
       if($review->product_id == $cars){
        ?>
        <b>Titlu: </b><i class="note"></i>{{$review->titlu}}</a> <br>
        <b>Utilizator: </b><i class="note"></i>{{$review->user_name}}</a><a> | </a>
        <b>Ora: </b><i class="fa fa-clock-o"></i>
        {{date('H: i', strtotime($review->created_at))}}</a><a> | </a>
        <b>Data: </b><i class="fa fa-calendar-o"></i>
          {{date('F j, Y', strtotime($review->created_at))}}</a>

    <br>
    <label><b>Comentariu: </b></label><br>

          <textarea style="width:30%;padding:2%;height:150px;font:36px/44px ">{{$review->comment}}</textarea></ul>

         <?php }?>
  <div>
   @endforeach</div></div></div>
   <hr style="height:2px;border-width:0;color:gray;background-color:gray">
   <p><b>Scrieti o recenzie </b></p>

   <form action="{{url('/addReview')}}" method="post">
    {{ csrf_field() }}
    <div>
      <span>
          <input type="text" name="titlu" placeholder="Titlu"/>
          <input type="hidden" name="product_id" value={{$cars}} />
          <input type="hidden", id="product_id" ,name="product_id" value="3487">
      </span><br></div>
      <br>
      <textarea name="comment" ></textarea>
          <br>
      <button type="submit" class="btn btn-danger">
          Submit
      </button>
  </form>
</div>


@endsection

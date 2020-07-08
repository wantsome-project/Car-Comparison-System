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
    <?php



/* class="tab-pane fade " id="reviews" >
                            <div class="col-sm-12">

                              @foreach($reviews as $review)
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>{{$review->person_name}}</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>
                                      {{date('H: i', strtotime($review->created_at))}}</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>
                                        {{date('F j, Y', strtotime($review->created_at))}}</a></li>
                                </ul>
                                <p>{{$review->review_content}}</p>
                                @endforeach
                                <p><b>Write Your Review</b></p>

                                <form action="{{url('/addReview')}}" method="post">
                                  {{ csrf_field() }}
                                    <span>
                                        <input type="text" name="person_name" placeholder="Your Name"/>
                                        <input type="email", name="person_email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="review_content" ></textarea>

                                    <button type="submit" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>-->*/


    $cars= $car->id;?>
    <?php $reviews = DB::table('reviews')->get();?>

    @foreach($reviews as $review)
    <ul><?php
    if($review->product_id == $cars){?>
        <li><a href=""><i class="fa fa-user"></i>{{$review->titlu}}</a></li>
    <li><a href=""><i class="fa fa-user"></i>{{$review->user_name}}</a></li>
    <li><a href=""><i class="fa fa-clock-o"></i>
        {{date('H: i', strtotime($review->created_at))}}</a></li>
      <li><a href=""><i class="fa fa-calendar-o"></i>
          {{date('F j, Y', strtotime($review->created_at))}}</a></li>
    </ul>
    <p>{{$review->comment}}</p>
<?php }?>

   @endforeach

   <p><b>Write Your Review</b></p>

   <form action="{{url('/addReview')}}" method="post">
    {{ csrf_field() }}
      <span>
          <input type="text" name="titlu" placeholder="Titlu"/>
          <input type="hidden" name="product_id" value={{$cars}} />
          <input type="hidden", id="product_id" ,name="product_id" value="3487">
      </span>
      <textarea name="comment" ></textarea>

      <button type="submit" class="btn btn-default pull-right">
          Submit
      </button>
  </form>
</div>
   </tr>
  </table>
 </div>
</div>

@endsection

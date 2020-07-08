<?php

namespace App;
use App\Car;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function getCreateRules()
    {
        return array(
            'comment'=>'required|min:10',
            'rating'=>'required|integer|between:1,5'
        );
    }
    public function user()
    {
      return $this->belongsTo('User');
    }

    public function product()
    {
      return $this->belongsTo('Product');
    }

    public function scopeApproved($query)
    {
      return $query->where('approved', true);
    }

    public function scopeSpam($query)
    {
      return $query->where('spam', true);
    }

    public function scopeNotSpam($query)
    {
      return $query->where('spam', false);
    }

public function storeReviewForProduct($id, $comment, $rating)
     {
    $car = Car::find($id);

    $this->comment = $comment;
    $this->rating = $rating;
    $car->reviews()->save($this);


     }
}

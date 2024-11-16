<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealOrder extends Model
{
    public function Meal(){

return $this->belongsTo('App\Meal','meal_id');

   }
   public function Order(){

return $this->belongsTo('App\Order','order_id');

   }
}

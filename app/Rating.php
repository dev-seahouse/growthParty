<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  public function serviceProvider()
  {
    return $this->belongsTo(ServiceProvider::class);
  }
  public function getOverAllRating(){
    $serviceScore = $this->service;
    $communicationScore =$this->communication;
    return ($serviceScore + $communicationScore)/2;
  }
}

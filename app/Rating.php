<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Rating
 *
 * @property int $id
 * @property int $service
 * @property int $communication
 * @property int $service_provider_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\ServiceProvider $serviceProvider
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCommunication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereServiceProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

<?php
/**
 * Created by PhpStorm.
 * User: kenan
 * Date: 15/7/17
 * Time: 03:31
 */

namespace App\Programs;


use App\Rating;

class ProgramMatchQueue extends \SplPriorityQueue
{
  protected $programs;
  public function __construct($programs)
  {
    $this->programs = $programs;
    foreach ($this->programs as $program){
      $this->insert($program, $this->calculateQueueNumber($program));
    }
  }

  public function calculateQueueNumber(Program $program)
  {
    $serviceProvider = $program->serviceProvider;
    $affiliate_count = $program->affiliate_count;
    $affiliate_count_weight = 9999999 - $affiliate_count;
    $rating = $serviceProvider->ratings()->first()->getOverAllRating();
    return $affiliate_count_weight + $rating;
  }
}
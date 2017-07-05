<?php

namespace App;


use Cache;

class ProgramMacher implements ProgramMacherInterface
{
  protected $industries;
  protected $programs;


  public function __construct()
  {
    $this->programs = Cache::remember('programs', 10080, function () {
      return \App\Program::all();
    });
  }

  public function match($user, $numMatches)
  {
    print_r($this->programs->take(3));
    return $this->programs;
  }
}
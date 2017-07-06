<?php

namespace App;


use Cache;

class ProgramMacher implements ProgramMacherInterface
{
  protected $industries;
  protected $programs;


  public function __construct()
  {
    $this->programs = Cache::get('programs',function () {
      return Program::all();
    });
  }

  public function match($user, $numMatches)
  {
    return $this->programs->take($numMatches);
  }
}
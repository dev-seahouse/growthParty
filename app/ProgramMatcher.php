<?php

namespace App;


use Cache;

class ProgramMatcher implements ProgramMacherInterface
{
  protected $industries;
  protected $programs;


  public function __construct()
  {
    $this->programs = Cache::get('programs',function () {
      return Program::get();
    });
  }

  public function match($user, $numMatches)
  {
    return $this->programs->take($numMatches);
  }
}
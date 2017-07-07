<?php

namespace App\Programs;


use Cache;

class ProgramMatcherImpl implements ProgramMatcher
{
  protected $industries;
  protected $programs;

  public function __construct()
  {
    $this->programs = Cache::get('programs', function () {
      return Program::get();
    });
  }

  public function getMatches($user, $numMatches)
  {
    $occupationName = $user->occupation->name;
    $candidates = Program::matchedPrograms($occupationName);
    return $candidates->take($numMatches);
  }
}
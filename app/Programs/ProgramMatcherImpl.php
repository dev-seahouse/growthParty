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
    $matches = collect();
    $pq = new ProgramMatchQueue($candidates);
    for ($counter = 0; $counter < $numMatches; $counter++){
      $matches->push($pq->extract());
    }
    return $matches;
  }
}
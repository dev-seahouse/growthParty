<?php

namespace App\Programs;

use App\User;

class ProgramAssigner
{
  private $matcher;

  public function __construct(ProgramMatcher $matcher)
  {
    $this->matcher = $matcher;
  }

  public function assign(User $user)
  {
    $numProgramsShouldHave = $user->maxMatches;
    $currentUserPrograms = $user->programs;
    $numProgramsUserHave = $currentUserPrograms->count();
    $numProgramsToMatch = $numProgramsShouldHave - $numProgramsUserHave;
    $matchingPrograms = $this->matcher->getMatches($user, $numProgramsToMatch);

    if ($numProgramsToMatch !== 0 && !$currentUserPrograms->contains($matchingPrograms)) {
      $user->programs()->saveMany($matchingPrograms);
    }
  }
}
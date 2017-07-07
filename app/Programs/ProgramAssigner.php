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
    // if user have less than user.maxNoProgramsAllowed, then assign the left over
    // todo: there should be a maxMatches attribute
    $numProgramsShouldHave = 3;
    $userPrograms = $user->programs;
    $numProgramsUserHave = $userPrograms->count();
    $numProgramsToMatch = $numProgramsShouldHave - $numProgramsUserHave;
    $matchedPrograms = $this->matcher->getMatches($user, $numProgramsToMatch);
    if ($numProgramsToMatch!==0 && !$userPrograms->contains($matchedPrograms)) {
      $user->programs()->saveMany($matchedPrograms);
    }
  }
}
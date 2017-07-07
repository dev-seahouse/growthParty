<?php
/**
 * Created by PhpStorm.
 * User: kenan
 * Date: 29/6/17
 * Time: 05:05
 */

namespace App\Programs;

Interface ProgramMatcher
{
  // given user and number of expected mathes,
  // return list of matched programs
  // @param User $user
  // @param int $numMathes
  // @return array::Program
  public function getMatches($user, $numMatches);

}
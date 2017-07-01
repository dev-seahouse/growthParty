<?php
/**
 * Created by PhpStorm.
 * User: kenan
 * Date: 29/6/17
 * Time: 04:58
 */

namespace App;


class ProgramMacher implements ProgramMacherInterface
{
  protected $industries;
  protected $programs;


  public function __construct()
  {
    $this->industries = \Cache::remember('industries', 60*24*7,function(){
      return Industry::all();
    });

    $this->programs =  \Cache::remember('programs', 60*24*7,function(){
      return Program::all();
    });
  }

  public function match($user, $numMatches)
  {
    $occupation = $user->occupation;

  }
}
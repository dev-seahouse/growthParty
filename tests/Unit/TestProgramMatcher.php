<?php

namespace Tests\Unit;

use App\Program;
use App\ProgramMatcher;
use App\User;
use Tests\TestCase;
use Tests\Traits\CustomDatabaseMigration as DatabaseMigrations;

class TestProgramMatcher extends TestCase
{
  use DatabaseMigrations;
  private $matcher;
  private $users;

  public function setUp()
  {
    parent::setUp();
    $this->users = $this->createRandomUsers(10);
    $this->matcher = new ProgramMatcher();
  }

  public function testCanCreateMatcher()
  {
    $this->assertInstanceOf(ProgramMatcher::class, $this->matcher);
  }

  public function testItShouldReturnCorrectNumberOfPrograms()
  {
    $user = $this->users->first();
    $numberOfProgramMatchesToReturn = mt_rand(1, 3);
    $matchedPrograms = $this->matcher->match($user, $numberOfProgramMatchesToReturn);
    $this->assertEquals($numberOfProgramMatchesToReturn, $matchedPrograms->count());
  }

  public function testGivenAUserItShouldReturnAMatchingProgram(){
    $user = $this->users->first();
    $occupationName = $user->occupation->name;
    $listOfExpectedMatches = Program::matchedPrograms($occupationName);

  }

  protected function createRandomUsers($numberUsers)
  {
    return factory(User::class, $numberUsers)->create();
  }


}

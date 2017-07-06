<?php

namespace Tests\Unit;

use App\ProgramMacher;
use App\User;
use Hamcrest\Matcher;
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
    $this->matcher = new ProgramMacher();
  }

  public function testCanCreateMatcher()
  {
    $this->assertInstanceOf(ProgramMacher::class, $this->matcher);
  }

  public function testItShouldReturnCorrectNumberOfPrograms()
  {
    $user = $this->users->first();
    $numberOfProgramMatchesToReturn = mt_rand(1, 3);
    $matchedPrograms = $this->matcher->match($user, $numberOfProgramMatchesToReturn);
    $this->assertEquals($numberOfProgramMatchesToReturn, $matchedPrograms->count());
  }

  public function testItCanAssignProgramToUser()
  {
  }

  protected function createRandomUsers($numberUsers)
  {
    return factory(User::class, $numberUsers)->create();
  }
}

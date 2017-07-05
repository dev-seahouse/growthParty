<?php

namespace Tests\Unit;

use App\ProgramMacher;
use App\User;
use Hamcrest\Matcher;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestProgramMatcher extends TestCase
{
  use DatabaseMigrations;
  private $matcher;
  private $users;

  public function setUp()
  {
    parent::setUp();
    $this->users = $this->createRandomUsers();
    $this->matcher = new ProgramMacher();
    $this->artisan('db:seed');
    $this->artisan('cache:clear');
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

  protected function createRandomUsers()
  {
    return factory(User::class, 10)->create();
  }
}

<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function fetchRandomUser(){
        $user = User::inRandomOrder()->first();
        return $user;
    }

    public function testDatatype()
    {
        $user = self::fetchRandomUser();
        $this->assertInternalType('string',$user->name);
    }
}

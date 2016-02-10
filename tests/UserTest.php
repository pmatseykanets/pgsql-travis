<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_user()
    {
        $user = factory(User::class)->create(['password' => bcrypt('secret')]);
        $this->actingAs($user)
            ->visit('/')
            ->see('Laravel 5');
    }
}

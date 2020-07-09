<?php

namespace Radiocubito\AutomaticPasswordHashing\Tests;

use Illuminate\Support\Facades\Hash;
use Radiocubito\AutomaticPasswordHashing\Tests\Fixtures\User;

class HashPasswordTest extends TestCase
{
    /** @test */
    public function it_can_auto_hash_the_password_on_user_create()
    {
        $user = factory(User::class)->create(['password' => 'password']);

        $this->assertTrue(Hash::check('password', $user->fresh()->password));
    }

    /** @test */
    public function it_can_auto_hash_the_password_on_user_update()
    {
        $user = factory(User::class)->create();

        $user->password = 'new_password';

        $user->save();

        $this->assertTrue(Hash::check('new_password', $user->fresh()->password));
    }

    /** @test */
    public function it_does_not_hash_the_password_if_its_empty()
    {
        $user = factory(User::class)->create(['password' => '']);

        $this->assertEquals('', $user->fresh()->password);
    }
}

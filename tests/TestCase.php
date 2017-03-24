<?php

namespace Tests;


use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;



     public function createuser(){
        return factory(App\User::class)->create([
        'name' => 'andres',
        'email' => 'ab@hotmail.com',
        'password' =>  bcrypt(1234567),
         ]);
    }
}

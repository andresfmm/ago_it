<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = $this->createuser();

        $this->actingAs($user)
        ->visit('home')
        ->see('Form Companies')
        ->see('Edit')
        ->see('Delete')
        ->see('New')
        ->click('New')
        ->see('title:')
        ->see('Mission:')
        ->see('Vision:')
        ->see('Meta Title:')
        ->see('Description:')
        ->see('Company Profile:')
        ->see('Keywords:')
        ->see('create')
        ->see('close');
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //$response = $this->get('/show');
        //$response = $this->withSession(['id' => '6'])
          //  ->get('/');
        $user = factory(User::class)->create();

        $response = $this->actingAs($user,'mahmoud@hedesh.ir')
            ->withSession(['foo' => 'bar'])
            ->get('/');
        $response->assertStatus(200);
    }
}

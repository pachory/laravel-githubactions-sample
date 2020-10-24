<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends \Tests\TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function Eloquentのテスト()
    {
        $attribute = ['name' => \Illuminate\Support\Str::uuid()];
        \App\Item::create($attribute);

        $this->assertDatabaseHas('items', $attribute);
    }
}

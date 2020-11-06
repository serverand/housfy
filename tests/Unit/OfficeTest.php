<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class OfficeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function OfficeTest()
    {
        $this->json('POST', '/offices', ['name' => 'Sally'])
             ->seeJson([
                 'created' => true,
             ]);
            
    }
}

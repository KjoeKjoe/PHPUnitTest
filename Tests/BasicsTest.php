<?php

use PHPUnit\Framework\TestCase;

class BasicsTest extends TestCase
{
//  Check if the array is empty
    public function testAssertEmpty()
    {
        $array = array();

        $this->assertEmpty($array);
    }

//  Check if the array is not empty
    public function testAssertNotEmpty()
    {
        $array = array([
            'I am' => 'Hungry'
        ]);

        $this->assertNotEmpty($array);
    }


}
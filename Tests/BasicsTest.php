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

//  Check if the variables are the same value
    public function testAssertEquals()
    {
        $varOne = 500;
        $varTwo = 500;

//      I Expect var 1 and 2 to be the same value
        $this->assertEquals($varOne, $varTwo);
    }

//  Check if the variables are NOT the same value
    public function testAssertNotEquals()
    {
        $varOne = 500;
        $varTwo = 600;

//      I expect var 1 and 2 not to be the same value
        $this->assertNotEquals($varOne, $varTwo);
    }

//  Check if the outcome is TRUE
    public function testAssertTrue()
    {
        $myOutcomeData = True;

//      I expect that my return is equal to TRUE
        $this->assertTrue($myOutcomeData);
    }

//  Check if the outcome is False
    public function testAssertFalse()
    {
        $myOutcomeData = False;

//      I expect that my return is equal to False
        $this->assertFalse($myOutcomeData);
    }

//  Check if the data is greater than the other
    public function testAssertGreaterThan()
    {
        $varOne = 10;
        $varTwo = 25;

//      I expect varTwo to be bigger than varOne
        $this->assertGreaterThan($varOne, $varTwo);

    }
//  Check if the data is greater than or Equals to the other
    public function testAssertGreaterThanOrEqual()
    {
        $varOne = 10;
        $varTwo = array(10,25);


//      I expect varTwo to be bigger than varOne
        $this->assertGreaterThanOrEqual($varOne, $varTwo[array_rand($varTwo)]);

    }
}
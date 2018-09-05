<?php

use PHPUnit\Framework\TestCase;

class BasicsTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        echo "\n\n ----------BASIC TESTS----------";
    }

//  Check if the array is empty
    public function testAssertEmpty()
    {
        $array = array();

        $this->assertEmpty($array);

        echo "\n Test Basics Empty Completed";
    }

//  Check if the array is not empty
    public function testAssertNotEmpty()
    {
        $array = array([
            'I am' => 'Hungry'
        ]);

        $this->assertNotEmpty($array);

        echo "\n Test Basics not Empty Completed";
    }

//  Check if the variables are the same value
    public function testAssertEquals()
    {
        $varOne = 500;
        $varTwo = 500;

//      I Expect var 1 and 2 to be the same value
        $this->assertEquals($varOne, $varTwo);

        echo "\n Test Basics Equals Completed";
    }

//  Check if the variables are NOT the same value
    public function testAssertNotEquals()
    {
        $varOne = 500;
        $varTwo = 600;

//      I expect var 1 and 2 not to be the same value
        $this->assertNotEquals($varOne, $varTwo);

        echo "\n Test Basics Not Equals Completed";
    }

//  Check if the outcome is TRUE
    public function testAssertTrue()
    {
        $myOutcomeData = True;

//      I expect that my return is equal to TRUE
        $this->assertTrue($myOutcomeData);

        echo "\n Test Basics True Completed";
    }

//  Check if the outcome is False
    public function testAssertFalse()
    {
        $myOutcomeData = False;

//      I expect that my return is equal to False
        $this->assertFalse($myOutcomeData);

        echo "\n Test Basics False Completed";
    }

//  Check if the data is greater than the other
    public function testAssertGreaterThan()
    {
        $varOne = 10;
        $varTwo = 25;

//      I expect varTwo to be bigger than varOne
        $this->assertGreaterThan($varOne, $varTwo);

        echo "\n Test Basics Greater Than Completed";

    }

//  Check if the data is greater than or Equals to the other
    public function testAssertGreaterThanOrEqual()
    {
        $varOne = 10;
        $varTwo = array(10,25);


//      I expect varTwo to be bigger than varOne
        $this->assertGreaterThanOrEqual($varOne, $varTwo[array_rand($varTwo)]);

        echo "\n Test Basics Greater than or Equal Completed";

    }

//  Check if the data is greater than the other
    public function testAssertLesserThan()
    {
        $varOne = 25;
        $varTwo = 10;

//      I expect varTwo to be lesser than varOne
        $this->assertLessThan($varOne, $varTwo);

        echo "\n Test Basics Lesser Than Completed";

    }

//  Check if the data is lesser than or Equals to the other
    public function testAssertLesserThanOrEqual()
    {
        $varOne = 25;
        $varTwo = array(10,25);


//      I expect varTwo to be lesser than varOne
        $this->assertLessThanOrEqual($varOne, $varTwo[array_rand($varTwo)]);

        echo "\n Test Basics Lesser Than or Equal Completed";

    }

//  Check if the internal type is correct (string, integer)
    public function testAssertInternalType()
    {
        $data = 'I am a string!';

//      I expect my data to be a string
        $this->assertInternalType('string', $data);

        echo "\n Test Basics Internal Type Completed";
    }

//  Check if the internal type is correct (string, integer)
    public function testAssertNotInternalType()
    {
        $data = 1001;

//      I expect my data NOT to be a string
        $this->assertNotInternalType('string', $data);

        echo "\n Test Basics not Internal Type Completed";
    }

//  Check if the data/outcome is equal to NULL
    public function testAssertNull()
    {
        $data = null;

//      I expect my outcome to be NULL
        $this->assertNull($data);

        echo "\n Test Basics Null Completed";

    }

//  Check if the data/outcome is equal to NULL
    public function testAssertNotNull()
    {
        $data = 'I am FULL with DATA!';

//      I expect my outcome to be NULL
        $this->assertNotNull($data);

        echo "\n Test Basics Not Null Completed";

    }

//  Check if data is IDENTICAL to eachother
    public function testAssertSame()
    {
        $varOne = 25;
        $varTwo = 25;

//      I Expect varOne and varTwo to be IDENTICAL from eachother
        $this->assertSame($varOne, $varTwo);

        echo "\n Test Basics Same Completed";
    }

//  Check if data is NOT IDENTICAL to eachother
    public function testAssertNotSame()
    {
        $varOne = 25;
        $varTwo = '25';

//      I Expect varOne and varTwo not to be IDENTICAL from eachother
        $this->assertNotSame($varOne, $varTwo);

        echo "\n Test Basic not Same Completed";
    }
}
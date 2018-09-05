<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{

//  Check if the array contains the wanted keys23312
    public function testArrayHasKey()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

//      I am looking for a key named "Tim"
        $this->assertArrayHasKey('Tim', $array);
        echo "Test Array has Key Completed";
    }

//  Check if the array contains a/the value that you wanted
    public function testArrayContains()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

//      I am looking for the value 20
        $this->assertContains(20, $array);
    }

//  Check if the array not contains a certain value
    public function testArrayNotContains()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

//      I am looking for the value 1998
        $this->assertNotContains(1998, $array);
    }

//  Check if the array contains only one type of value type (string, integer, etc..)
    public function testArrayContainsOnly()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );// does contain one type of value type (integer)

//      I am looking if the array only contains integers as value
        $this->assertContainsOnly('integer', $array);
    }

//  Check if the array not contains one type of value type (string, integer, etc..)
    public function testArrayNotContainsOnly()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 'Typisch mike',
            'Jasper' => 'Gekke man',
            'Ronald' => 40,
            'Ruud' => 50
        );// does not contain one type of values (string and integer)

//      I am looking if the array does not only contains strings as value
        $this->assertNotContainsOnly('string', $array);
    }

//  Check if the array has the wanted/needed amount of items
    public function testArrayCount()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        ); // Equals 5

//      I am looking if the array contains 5 items
        $this->assertCount(5, $array);
    }

//  Check if the array has more of fewer items than expected
    public function testArrayNotCount()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        ); // Equals 5

//      I am looking if the array contains 6 items
        $this->assertNotCount(6, $array);
    }
}
<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testArrayHasKey()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

        $this->assertArrayHasKey('Tim', $array);
    }

    public function testArrayContains()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

        $this->assertContains(20, $array);
    }

    public function testArrayNotContains()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

        $this->assertNotContains(1998, $array);
    }

    public function testArrayContainsOnly()
    {
        $array = array(
            'Ruud' => 50
        );

        $this->assertContainsOnly('Ruud', $array);
    }

    public function testArrayNotContainsOnly()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        );

        $this->assertNotContainsOnly('Pieter', $array);
    }

    public function testArrayCount()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        ); // Equals 5

        $this->assertCount(5, $array);
    }

    public function testArrayNotCount()
    {
        $array = array(
            'Tim' => 10,
            'Mike' => 20,
            'Jasper' => 30,
            'Ronald' => 40,
            'Ruud' => 50
        ); // Equals 5

        $this->assertNotCount(6, $array);
    }
}
<?php

use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function testJsonStringEquals()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode(['Mascot' => 'Mike']),
            json_encode(['Mascot' => 'Mike'])
        );
    }
}
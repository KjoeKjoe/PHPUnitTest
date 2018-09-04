<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client as Guzzle;

class JsonTest extends TestCase
{
    private $http;

    public function setUp()
    {
        $this->http = new Guzzle(['base_uri' => 'swapi.co/api']);
    }

    public function tearDown() {
        $this->http = null;
    }

    public function testJsonStringEquals()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode(['Mascot' => 'Mike']),
            json_encode(['Mascot' => 'Mike'])
        );
    }


    public function testGetJsonFunction()
    {
        $response = $this->http->request('GET', 'planets/1');
        $this->assertEquals(200, $response->getStatusCode());

        $contentType = $response->getHeaders()["Content-Type"][0];
        $this->assertEquals("application/json", $contentType);

        $userAgent = json_decode($response->getBody())->{"planets/1"};
        $this->assertRegexp('/Guzzle/', $userAgent);
    }
}
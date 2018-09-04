<?php
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    private $http;

    public function setUp()
    {
        $this->http = new \GuzzleHttp\Client(['base_uri' => 'https://swapi.co/api/']);
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

        $data = json_decode($response->getBody());
    }
}
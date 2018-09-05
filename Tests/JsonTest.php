<?php
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    private $http;

    public static function setUpBeforeClass()
    {
        echo "\n\n ----------JSON TESTS----------";
    }

    public function setUp()
    {
        $this->http = new \GuzzleHttp\Client(['base_uri' => 'https://swapi.co/api/']);
    }

    public function testJsonStringEquals()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode(['Mascot' => 'Mikey']),
            json_encode(['Mascot' => 'Mikey'])
        );

        echo "\n Test JSON string Equals Completed";
    }


    public function testGetJsonFunction()
    {
        $response = $this->http->request('GET', 'planets/1');
        $this->assertEquals(200, $response->getStatusCode());

        $contentType = $response->getHeaders()["Content-Type"][0];
        $this->assertEquals("application/json", $contentType);

        $data = json_decode($response->getBody());

        echo "\n Test JSON GET Request Completed";
    }
}
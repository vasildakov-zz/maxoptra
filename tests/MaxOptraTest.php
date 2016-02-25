<?php
namespace VasilDakov\MaxOptra\Test;

use Psr\Http\Message\ResponseInterface;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Middleware;

use Zend\Json\Json;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializationContext;

use VasilDakov\MaxOptra;
use VasilDakov\MaxOptra\Middleware\JsonStream;

class MaxOptraTest extends \PHPUnit_Framework_TestCase
{

	public function setUp()
	{

	}


    public function testAbc()
    {
        $status  = 200;
        $headers = ['Accept' => 'application/xml'];
        $body    = fopen('./tests/mock/bodies/response/authResponse.xml', 'r+');

        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response($status, $headers, $body)
        ]);

        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::mapResponse(function (ResponseInterface $response) {
            $json = new JsonStream($response->getBody());
            return $response->withBody($json);
        }));

        $config = [
            'base_uri' => 'http://beta.maxoptra.com/rest/2/',
            'handler' => $stack,
        ];

        $client = new Client($config);
        $maxoptra = new MaxOptra\MaxOptra($client);

        $request = new MaxOptra\Request\Authentication('account', 'user', 'password');

        $response = $maxoptra->createSession($request);
        //$contents = $response->getBody()->getContents();

        $json = $response->getBody()->jsonSerialize();
        $array = Json::decode($json, true);

        $this->assertEquals('OK', $response->getReasonPhrase());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('8aa519d2c0af4f37a27a42a995528199', $array['apiResponse']['authResponse']['sessionID']);
    } 


    public function testXyz()
    {
        $status  = 200;
        $headers = ['Accept' => 'application/xml'];
        $body    = fopen('./tests/mock/bodies/response/authResponse.xml', 'r+');

        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response($status, $headers, $body)
        ]);

        $handler = HandlerStack::create($mock);

        $config = [
            'base_uri' => 'http://beta.maxoptra.com/rest/2/',
            'handler' => $handler,
        ];

        $client = new Client($config);
        $maxoptra = new MaxOptra\MaxOptra($client);

        $request = new MaxOptra\Request\Authentication('account', 'user', 'password');

        $response = $maxoptra->createSession($request);
        $contents = $response->getBody()->getContents();
        $xml = new \SimpleXMLElement($contents);
        //var_dump($xml); exit();

        $this->assertEquals('OK', $response->getReasonPhrase());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('8aa519d2c0af4f37a27a42a995528199', $xml->authResponse->sessionID);
    } 
}
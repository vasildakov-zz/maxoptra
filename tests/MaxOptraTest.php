<?php
namespace VasilDakov\MaxOptra\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
#use GuzzleHttp\Psr7\Response;
#use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Middleware;

use Zend\Config\Config;

use VasilDakov\MaxOptra;

class MaxOptraTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    private $maxoptra;

    public function setUp()
    {
        $this->account  = 'ws';
        $this->user     = 'paul.rooney';
        $this->password = 'dontpreach';

        $this->config = [
            'base_uri' => 'http://beta.maxoptra.com/rest/2/',
            'timeout'  => 2.0,
            'handler'  => null
        ];

        $client = new Client($this->config);
        $maxoptra = new MaxOptra\MaxOptra($client);
        
        $request = new MaxOptra\Request\Session(
            $this->account,
            $this->user,
            $this->password
        );

        $response = $maxoptra->createSession($request);
        
        $contents = $response->getBody()->getContents();
        
        $xml = new \SimpleXMLElement($contents);
        
        $this->sessionID = (string)$xml->authResponse->sessionID;
        //var_dump($this->sessionID);
    }


    public function testAbc()
    {
        /* $client = new Client([
            'base_uri' => 'http://review.maxoptra.com/rest/2',
        ]);

        $headers = [];
        $body    = 'accountID=demo&user=demo&password=123';

        $request = new Request('POST', '/post', $headers, $body);

        $response = $client->send($request);
        var_dump($response->getBody()->getContents()); */

    }


    public function testCreateSession()
    {
        $config = $this->config;

        $client = new Client($config);
        $maxoptra = new MaxOptra\MaxOptra($client);

        $request = new MaxOptra\Request\Session(
            $this->account,
            $this->user,
            $this->password
        );

        $response = $maxoptra->createSession($request);

        $contents = $response->getBody()->getContents();
        $xml = new \SimpleXMLElement($contents);
        //var_dump($xml);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('OK', $response->getReasonPhrase());
    }


    public function testCreateSessionThrowException()
    {
        $this->setExpectedException('InvalidArgumentException');

        $client = new Client($this->config);
        $maxoptra = new MaxOptra\MaxOptra($client);

        $response = $maxoptra->createSession(
            new MaxOptra\Request\Session(null, null, null)
        );
    }


    public function testGetOrderStatuses()
    {
        $orders = '1071088*1070773*1070807*';

        $client = new Client($this->config);
        $maxoptra = new MaxOptra\MaxOptra($client);

        $response = $maxoptra->getOrderStatuses($this->sessionID, $orders);

        $contents = $response->getBody()->getContents();
        $xml = new \SimpleXMLElement($contents);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('OK', $response->getReasonPhrase());
    }


    public function testGetOrderStatusesThrowException()
    {
        $this->setExpectedException('InvalidArgumentException');

        $client = new Client($this->config);
        $maxoptra = new MaxOptra\MaxOptra($client);

        $response = $maxoptra->getOrderStatuses(null, null);
    }


    /* public function testXyz()
    {
        $status  = 200;
        $headers = ['Accept' => 'application/xml'];
        $body    = fopen('./tests/mock/bodies/login.xml', 'r+');

        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response($status, $headers, $body)
        ]);

        $handler = HandlerStack::create($mock);

        $config = $this->config;
        $config = ['handler'  => $handler];

        $client = new Client($config);
        $maxoptra = new MaxOptra\MaxOptra($client);
        
        $response = $maxoptra->createSession(1, 2, 3);
        $contents = $response->getBody()->getContents();
        $xml = new \SimpleXMLElement($contents);
        var_dump($xml);

        $this->assertEquals('OK', $response->getReasonPhrase());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('8aa519d2c0af4f37a27a42a995528199', $xml->authResponse->sessionID);
    } */
}

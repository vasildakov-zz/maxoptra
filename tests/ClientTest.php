<?php
namespace VasilDakov\MaxOptra\Test;

use VasilDakov\MaxOptra;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testClientCanBeConstructed()
    {
		/* $client = new Client();
		$description = new Description([
		    'baseUrl' => 'https://httpbin.org/',
		    'operations' => [
		        'someMethod' => [
		            'httpMethod' => 'GET',
		            'uri' => '/get?foo=bar',
		            //'responseType' => 'class',
					//'responseClass' => 'VasilDakov\\MaxOptra\\Response\\Test',
		            'responseModel' => 'getResponse',
		            'parameters' => [
		                'foo' => [
		                    'type' => 'string',
		                    'location' => 'uri'
		                ],
		                'bar' => [
		                    'type' => 'string',
		                    'location' => 'query'
		                ]
		            ]
		        ]
		    ],
		    'models' => [
		        'getResponse' => [
		            'type' => 'object',
		            'additionalProperties' => [
		                'location' => 'json'
		            ]
		        ]
		    ]
		]);

		$guzzleClient = new GuzzleClient($client, $description);

		$result = $guzzleClient->someMethod(['foo' => 'bar']); */
    }
}

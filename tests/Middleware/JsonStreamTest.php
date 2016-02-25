<?php
namespace VasilDakov\MaxOptra\Test\Middleware;

use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Psr7\Stream;
use VasilDakov\MaxOptra\Middleware\JsonStream;

class JsonStreamTest extends \PHPUnit_Framework_TestCase
{

    public function testIsInstanceOfJsonStream()
    {
        $jsonStream = $this->getJsonStream('');

        $this->assertInstanceOf(JsonStream::class, $jsonStream);
        $this->assertInstanceOf('Psr\Http\Message\StreamInterface', $jsonStream);
    }


    public function testJsonSerialize()
    {
        $doc = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
                <apiResponse version="2.0">
                    <authResponse>
                        <sessionID>8aa519d2c0af4f37a27a42a995528199</sessionID>
                    </authResponse>
                </apiResponse>';

        //var_dump($this->isValidXML($doc));

        $jsonStream = $this->getJsonStream($doc);
        $array = $jsonStream->jsonSerialize();

        //$this->assertEquals($expectedArray, $array);
    }



    /**
     * @expectedException RuntimeException
     */
    public function testJsonSerializeException()
    {
        $jsonStream = $this->getJsonStream('words');
        $jsonStream->jsonSerialize();
    }


    protected function getJsonStream($string)
    {
        $stream = fopen('php://temp', 'r+');
        fwrite($stream, $string);
        fseek($stream, 0);
        $streamObject = new Stream($stream);

        return new JsonStream($streamObject);
    }
}
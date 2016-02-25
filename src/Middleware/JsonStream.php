<?php
namespace VasilDakov\MaxOptra\Middleware;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use JsonSerializable;
use Psr\Http\Message\StreamInterface;
use RuntimeException;
use Zend\Json\Json;

class JsonStream implements StreamInterface, JsonSerializable
{
	use StreamDecoratorTrait;

    /**
     * @return string     $json
     * @throws RuntimeException
     */
    public function jsonSerialize()
    {
        $contents = (string) $this->getContents();

        if (!$this->isValidXML($contents)) {
            throw new RuntimeException('Error loading xml content');
        }

        $json = Json::fromXml($contents, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new RuntimeException('Error trying to decode response: ' . json_last_error_msg());
        }

        return $json;
    }


    /**
     * @param  string  $xml
     * @param  string  $version
     * @param  string  $encoding
     * @return boolean
     */
    public function isValidXML($xml, $version = '1.0', $encoding = 'utf-8')
    {
        if (trim($xml) === '') {
            return false;
        }

        libxml_use_internal_errors(true);

        $doc = new \DOMDocument($version, $encoding);
        $doc->loadXML($xml);

        $errors = libxml_get_errors();
        libxml_clear_errors();

        return empty($errors);
    }
}

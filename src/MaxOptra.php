<?php
namespace VasilDakov\MaxOptra;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use Zend\Config\Config;

class MaxOptra
{
    /**
     * @var \GuzzleHttp\Command\Guzzle\GuzzleClient $client
     */
    private $client;

    public function __construct()
    {
        $config = new Config(include './src/Description/services.php');
        $config = $config->toArray();

        $this->client = new GuzzleClient(
            new Client(),
            new Description($config)
        );
    }
}

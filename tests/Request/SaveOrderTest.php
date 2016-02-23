<?php
namespace VasilDakov\MaxOptra\Test\Request;

use Doctrine\Common\Collections;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializationContext;

use VasilDakov\MaxOptra\Entity;
use VasilDakov\MaxOptra\Request;

class SaveOrderTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
 
    }

    public function testAbc()
    {
        $client   = new Entity\Client;
        $location = new Entity\Location;

        $orders   = new Collections\ArrayCollection;

        $orders->add(new Entity\Order('Order 001'));
        $orders->add(new Entity\Order('Order 002'));
        $orders->add(new Entity\Order('Order 003'));

        $session = new Entity\Session('981be8ae41ba4a148f20a04508ab1ab');

        $request = new Request\SaveOrder($session, $orders);

        $context = new SerializationContext();
        $context->setSerializeNull(true);

        $serializer = SerializerBuilder::create()->build();

        // serialize
        $xml = $serializer->serialize($request, 'xml', $context);
        //var_dump($xml);

        // deserialize
        $object = $serializer->deserialize($xml, Request\SaveOrder::class, 'xml');
        self::assertInstanceOf(Request\SaveOrder::class, $object);
        //var_dump($object);
    }
}

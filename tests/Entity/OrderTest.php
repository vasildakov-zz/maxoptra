<?php
namespace VasilDakov\MaxOptra\Test\Entity;

use VasilDakov\MaxOptra\Entity;
use Zend\Hydrator;

class OrderTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var array $fixtures
	 */
	private $fixtures;

	public function setUp()
	{
        $this->fixtures = [
            'orderReference' => 'orderReference',
            'areaOfControl' => 'areaOfControl',
            'date' => new \DateTime,
            'client' => new Entity\Client,
            'priority' => 2,
            'durationDrop' => 5,
            'capacity' => 100,
            'volume' => 200,
            'collection' => false,
            'additionalInstructions' => 'Lorem ipsum dolor sit amet'
        ];

        // $hydrator = new Hydrator\ArraySerializable();
        // $entity = $hydrator->hydrate($data, new Entity\Location);
        // self::assertInstanceOf(Entity\Location::class, $entity);
	}

    public function testEntityCanBeConstructed()
    {
    	$entity = new Entity\Order;

    	$hydrator = new Hydrator\ClassMethods();

    	$entity = $hydrator->hydrate($this->fixtures, $entity);

    	self::assertInstanceOf(Entity\Order::class, $entity);

    	self::assertEquals($this->fixtures['orderReference'], $entity->getOrderReference());
    	self::assertEquals($this->fixtures['areaOfControl'], $entity->getAreaOfControl());
    	self::assertEquals($this->fixtures['date'], $entity->getDate());
        self::assertEquals($this->fixtures['client'], $entity->getClient());

        self::assertEquals($this->fixtures['priority'], $entity->getPriority());
        self::assertEquals($this->fixtures['durationDrop'], $entity->getDurationDrop());
        self::assertEquals($this->fixtures['capacity'], $entity->getCapacity());
        self::assertEquals($this->fixtures['volume'], $entity->getVolume());
        self::assertEquals($this->fixtures['collection'], $entity->getCollection());
        self::assertEquals($this->fixtures['additionalInstructions'], $entity->getAdditionalInstructions());

    }

}

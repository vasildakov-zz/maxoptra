<?php
namespace VasilDakov\MaxOptra\Test\Entity;

use VasilDakov\MaxOptra\Entity;
use Zend\Hydrator;

class LocationTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var array $fixtures
	 */
	private $fixtures;

	public function setUp()
	{
        $this->fixtures = [
            'name' => 'orderReference',
            'address' => '156 Hardy Court, Bollo Bridge Road, W3 8DE',
            'latitude' => 51.502008699999998,
            'longitude' => -0.27165450000000002,
        ];
	}

    public function testEntityCanBeConstructed()
    {
    	$entity = new Entity\Location;

    	$hydrator = new Hydrator\ClassMethods();

    	$entity = $hydrator->hydrate($this->fixtures, $entity);

    	self::assertInstanceOf(Entity\Location::class, $entity);

    	self::assertEquals($this->fixtures['name'], $entity->getName());
    	self::assertEquals($this->fixtures['address'], $entity->getAddress());
    	self::assertEquals($this->fixtures['latitude'], $entity->getLatitude());
        self::assertEquals($this->fixtures['longitude'], $entity->getLongitude());

    }

}

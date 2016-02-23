<?php
namespace VasilDakov\MaxOptra\Test\Entity;

use VasilDakov\MaxOptra\Entity;
use Zend\Hydrator;

class ClientTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var array $fixtures
	 */
	private $fixtures;

	public function setUp()
	{
        $this->fixtures = [
            'name'          => 'Some name',
            'contactPerson' => 'John Doe',
            'contactNumber' => '078902239843',
        ];

        // $hydrator = new Hydrator\ArraySerializable();
        // $entity = $hydrator->hydrate($data, new Entity\Location);
        // self::assertInstanceOf(Entity\Location::class, $entity);
	}

    public function testEntityCanBeConstructed()
    {
    	$entity = new Entity\Client;

    	$hydrator = new Hydrator\ArraySerializable();

    	$entity = $hydrator->hydrate($this->fixtures, $entity);

    	self::assertInstanceOf(Entity\Client::class, $entity);
    	self::assertEquals($this->fixtures['name'], $entity->getName());
    	self::assertEquals($this->fixtures['contactPerson'], $entity->getContactPerson());
    	self::assertEquals($this->fixtures['contactNumber'], $entity->getContactNumber());

    }

}

<?php
namespace VasilDakov\MaxOptra\Test;

use Zend\Hydrator;
use VasilDakov\MaxOptra\Entity;

class HydratorTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
 
    }

    public function testEntityCanBeHydrated()
    {
        // http://framework.zend.com/manual/current/en/modules/zend.stdlib.hydrator.html
        $data = [
            'name' => 'Customer Location 1',
            'address' => '5 Hedderwick Hill, West Barns, Dunbar, E. Lothian, EH42 1XF',
            'latitude' => 52.855864,
            'longitude'=> -1.457062,
        ];

        $hydrator = new Hydrator\ArraySerializable();
        
        $entity = $hydrator->hydrate($data, new Entity\Location);

        self::assertInstanceOf(Entity\Location::class, $entity);
    }
}

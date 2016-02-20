<?php
namespace VasilDakov\MaxOptra\Test;

use Doctrine\Common\Collections\ArrayCollection;
use VasilDakov\MaxOptra\Entity;

class CollectionTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
 
    }

    public function testAbc()
    {
        $collection  = new ArrayCollection;

        $order1 = new Entity\Order('1');
        $order2 = new Entity\Order('2');
        $order3 = new Entity\Order('3');

        $collection->add($order1);
        $collection->add($order2);
        $collection->add($order3);

        self::assertInstanceOf(ArrayCollection::class, $collection);
        self::assertEquals(3, $collection->count());

        $collection->removeElement($order1);
        self::assertEquals(2, $collection->count());
        
        //var_dump($collection);
    }
}

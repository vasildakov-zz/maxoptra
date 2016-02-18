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
        $collection  = new \Doctrine\Common\Collections\ArrayCollection;

        $collection->add(new Entity\Order);
        $collection->add(new Entity\Order);
        $collection->add(new Entity\Order);

        var_dump($collection);
    }
}

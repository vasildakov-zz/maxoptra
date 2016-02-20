<?php
namespace VasilDakov\MaxOptra\Test;

use Doctrine\Common\Collections\ArrayCollection;
use VasilDakov\MaxOptra\Entity;

class XmlTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
 
    }

    public function testAbc()
    {
        $collection  = new ArrayCollection;

        $collection->add(new Entity\Order('1A'));
        $collection->add(new Entity\Order('2A'));
        $collection->add(new Entity\Order('3A'));

        //var_dump($collection);
    }
}

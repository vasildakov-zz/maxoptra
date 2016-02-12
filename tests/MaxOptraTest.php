<?php
namespace VasilDakov\MaxOptra\Test;

use VasilDakov\MaxOptra;

class MaxOptraTest extends \PHPUnit_Framework_TestCase
{
    public function testClientCanBeConstructed()
    {
        $maxoptra = new MaxOptra\MaxOptra;
        self::assertInstanceOf(MaxOptra\MaxOptra::class, $maxoptra);
    }
}

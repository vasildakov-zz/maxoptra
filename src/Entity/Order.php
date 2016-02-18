<?php
namespace VasilDakov\MaxOptra\Entity;

use DateTime;

/**
 * Order
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 * @license http://www.opensource.org/licenses/mit-license.php
 */
class Order
{
    /**
     * @var string $orderReference
     */
    private $orderReference;

    /**
     * @var string $areaOfControl
     */
    private $areaOfControl;

    /**
     * @var DateTime $date
     */
    private $date;

    /**
     * @var Entity\Client $client
     */
    private $client;
}

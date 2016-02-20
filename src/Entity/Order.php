<?php
namespace VasilDakov\MaxOptra\Entity;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

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
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SerializedName("orderReference")
     * @Serializer\Type("string")
     */
    private $orderReference;

    /**
     * @var string $areaOfControl
     * @Serializer\SerializedName("areaOfControl")
     * @Serializer\Type("string")
     */
    private $areaOfControl;

    /**
     * @var DateTime $date
     * @Serializer\SerializedName("date")
     * @Serializer\Type("DateTime")
     */
    private $date;

    /**
     * @var Entity\Client $client
     * @Serializer\SerializedName("client")
     * @Serializer\Type("VasilDakov\MaxOptra\Entity\Client")
     */
    private $client;

    /**
     * @var int $priority   Example: 3
     * @Serializer\SerializedName("priority")
     * @Serializer\Type("integer")
     */
    private $priority;

    /**
     * @var [type] Example: 00:15
     * @Serializer\SerializedName("durationDrop")
     * @Serializer\Type("integer")
     */
    private $durationDrop;

    /**
     * @var integer $capacity   Example: 100
     * @Serializer\SerializedName("capacity")
     * @Serializer\Type("integer")
     */
    private $capacity;

    /**
     * @var integer $volume     Example: 200
     * @Serializer\SerializedName("volume")
     * @Serializer\Type("integer")
     */
    private $volume;

    /**
     * @var boolean $collection
     * @Serializer\SerializedName("collection")
     * @Serializer\Type("boolean")
     */
    private $collection = false;

    /**
     * @var string $additionalInstructions   Example: some additional instructions
     * @Serializer\SerializedName("additionalInstructions")
     * @Serializer\Type("string")
     */
    private $additionalInstructions;


    public function __construct($orderReference)
    {
        $this->orderReference = $orderReference;
    }
}

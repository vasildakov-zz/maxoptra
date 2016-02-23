<?php
namespace VasilDakov\MaxOptra\Entity;

use DateTime;
use VasilDakov\MaxOptra\Entity;
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


    public function __construct()
    {
        //
    }


    /**
     * @param string $orderReference
     * @return $this 
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    public function getOrderReference()
    {
        return $this->orderReference;
    }


    /**
     * @param string $areaOfControl
     * @return $this 
     */
    public function setAreaOfControl($areaOfControl)
    {
        $this->areaOfControl = $areaOfControl;

        return $this;
    }

    public function getAreaOfControl()
    {
        return $this->areaOfControl;
    }

    /**
     * @param DateTime $date
     * @return $this 
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Entity\Client $client
     * @return $this 
     */
    public function setClient(Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param int $priority
     * @return $this 
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $durationDrop
     * @return $this 
     */
    public function setDurationDrop($durationDrop)
    {
        $this->durationDrop = $durationDrop;

        return $this;
    }

    public function getDurationDrop()
    {
        return $this->durationDrop;
    }

    /**
     * @param int $capacity
     * @return $this 
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param int $volume
     * @return $this 
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param boolean $collection
     * @return $this 
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;

        return $this;
    }

    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param string $additionalInstructions
     * @return $this 
     */
    public function setAdditionalInstructions($additionalInstructions)
    {
        $this->additionalInstructions = $additionalInstructions;

        return $this;
    }

    public function getAdditionalInstructions()
    {
        return $this->additionalInstructions;
    }
}

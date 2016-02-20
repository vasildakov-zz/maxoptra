<?php
namespace VasilDakov\MaxOptra\Entity;

/**
 * Location
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 * @license http://www.opensource.org/licenses/mit-license.php
 */
class Location
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $address
     */
    private $address;

    /**
     * @var double $latitude
     */
    private $latitude;

    /**
     * @var double $longitude>
     */
    private $longitude;


    public function __construct()
    {

    }

    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
  
    /**
     * Populate from an array.
     *
     * @param array $data
     */
    public function exchangeArray($data = array())
    {
        $this->name = $data['name'];
        $this->address = $data['address'];
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getName()
    {
        return $this->name;
    }
}

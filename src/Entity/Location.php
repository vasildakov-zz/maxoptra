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
     * @var float $latitude
     */
    private $latitude;

    /**
     * @var float $longitude
     */
    private $longitude;


    public function __construct()
    {

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


    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }


    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }


    public function getLongitude()
    {
        return $this->longitude;
    }
}

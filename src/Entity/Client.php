<?php
namespace VasilDakov\MaxOptra\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Client
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 * @license http://www.opensource.org/licenses/mit-license.php
 */
class Client
{
    /**
     * @var string $name
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var string $contactPerson
     * @Serializer\Type("string")
     */
    private $contactPerson;

    /**
     * @var integer $contactNumber
     * @Serializer\Type("integer")
     */
    private $contactNumber;


    /**
     * @param string $name
     * @return $this 
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $contactPerson
     * @return $this 
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
        
        return $this;
    }

    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param string $contactNumber
     * @return $this 
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
        
        return $this;
    }

    public function getContactNumber()
    {
        return $this->contactNumber;
    }
}

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
}

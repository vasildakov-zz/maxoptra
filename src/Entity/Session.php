<?php
namespace VasilDakov\MaxOptra\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Session
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 * @license http://www.opensource.org/licenses/mit-license.php
 */
class Session
{
   /**
    * @var string $id
    * @Serializer\XmlElement(cdata=false)
    * @Serializer\SerializedName("sessionID")
    * @Serializer\Type("string")
    */
    private $id;

    /**
     * @param string $id  The session ID
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * The session ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

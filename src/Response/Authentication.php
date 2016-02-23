<?php 
namespace VasilDakov\MaxOptra\Response;

/**
 * Authentication Response
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 */

use VasilDakov\MaxOptra\Entity;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("apiResponse")
 */
class Authentication implements ResponseInterface
{
    /**
     * @var Entity\Session $session
     * @Serializer\Type("VasilDakov\MaxOptra\Entity\Session")
     * @Serializer\SerializedName("authResponse")
     */
    private $session;

    public function __construct()
    {
        //
    }

    /**
     * @param Entity\Session $session
     * @return $this
     */
    public function setSession(Entity\Session $session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * @return Entity\Session $session
     */
    public function getSession()
    {
        return $this->session;
    }
}

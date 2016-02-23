<?php
namespace VasilDakov\MaxOptra\Request;

/**
 * Session
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 * @license http://www.opensource.org/licenses/mit-license.php
 */

use Doctrine\Common\Collections;
use VasilDakov\MaxOptra\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("apiRequest")
 */
class SaveOrder
{
    /**
     * @var Entity\Session $session
     * @Serializer\Type("VasilDakov\MaxOptra\Entity\Session")
     */
    private $session;

    /**
     * @var Collections\Collection $orders
     * @Serializer\XmlList(inline = false, entry = "order")
     * @Serializer\Type("Doctrine\Common\Collections\ArrayCollection<VasilDakov\MaxOptra\Entity\Order>")
     */
    private $orders;


    /**
     * @param Entity\Session         $session
     * @param Collections\Collection $orders
     */
    public function __construct(Entity\Session $session, Collections\Collection $orders)
    {
        $this->session = $session;
        $this->orders  = $orders;
    }

    /**
     * @param Entity\Session $session
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


    /**
     * @param Entity\Session $session
     */
    public function addOrder(Entity\Order $order)
    {
        $this->orders->add($order);
    }

    /**
     * @return Collections\Collection $orders
     */
    public function getOrders()
    {
        return $this->orders;
    }


    /**
     * @param Entity\Session $session
     */
    public function removeOrder(Entity\Order $order)
    {
        $this->orders->remove($order);
    }
}

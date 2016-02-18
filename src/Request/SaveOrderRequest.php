<?php
namespace VasilDakov\MaxOptra\Request;

class SaveOrderRequest
{
    /**
     * @var Entity\Session $session
     */
    private $_session;

    /**
     * @var Collection $orders
     */
    private $_orders;

    public function __construct($session, $orders)
    {
        $this->_session = $session;
        $this->_orders  = $orders;
    }
}

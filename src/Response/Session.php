<?php 
namespace VasilDakov\MaxOptra\Response;

class Session implements ResponseInterface
{
    /**
     * @var string $session
     */
    private $session;

    public function __construct()
    {
        //
    }

    /**
     * @param string $session
     * @return $this
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * @return string $session
     */
    public function getSession()
    {
        return $this->session;
    }
}

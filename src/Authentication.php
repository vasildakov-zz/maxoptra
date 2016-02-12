<?php
namespace VasilDakov\MaxOptra;

class Authentication
{
    private $username;

    private $password;
    
    /**
     * @param string $username
     * @param string $password
     * @return void
     */
    public function __construct($username, $password)
    {
        //
    }

    /**
     * @return \VasilDakov\MaxOptra\Authentication\Result
     * @throws \VasilDakov\MaxOptra\Exception\ExceptionInterface
     */
    public function authenticate()
    {
        //
    }
}

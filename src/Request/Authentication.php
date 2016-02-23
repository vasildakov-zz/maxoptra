<?php
namespace VasilDakov\MaxOptra\Request;

use JMS\Serializer\Annotation as Serializer;
use InvalidArgumentException;

class Authentication implements RequestInterface
{
    /**
     * @var string $account
     */
    private $account;

    /**
     * @var string $user
     */
    private $user;

    /**
     * @var string $password
     */
    private $password;


    public function __construct($account, $user, $password)
    {
        if (!isset($account) || !isset($user) || !isset($password)) {
            throw new InvalidArgumentException;
        }

        $this->account  = $account;
        $this->user     = $user;
        $this->password = $password;
    }


    /**
     * @return string $account
     */
    public function getAccount()
    {
        return $this->account;
    }


    /**
     * @return string $user
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }
}

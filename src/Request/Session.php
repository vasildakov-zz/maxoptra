<?php
namespace VasilDakov\MaxOptra\Request;

use InvalidArgumentException;

class Session implements RequestInterface
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

        $this->account = $account;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @param string $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return string $account
     */
    public function getAccount()
    {
        return $this->account;
    }


    /**
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }
}

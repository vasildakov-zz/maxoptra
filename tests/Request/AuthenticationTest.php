<?php
namespace VasilDakov\MaxOptra\Test\Request;

use VasilDakov\MaxOptra\Request;
use InvalidArgumentException;

class AuthenticationTest extends \PHPUnit_Framework_TestCase
{
	private $account;
	private $user;
	private $password;

    public function setUp()
    {
        $this->account  = 'account';
        $this->user     = 'user'; 
        $this->password = 'password';
    }

    public function testClassCanBeConstructed()
    {
        $request = new Request\Authentication($this->account, $this->user, $this->password);

        self::assertEquals($this->account, $request->getAccount());
        self::assertEquals($this->user, $request->getUser());
        self::assertEquals($this->password, $request->getPassword());
    }

    public function testConstructorThrowsAnException()
    {
    	self::setExpectedException(InvalidArgumentException::class);

        $request = new Request\Authentication(null, null, null);
    }
}
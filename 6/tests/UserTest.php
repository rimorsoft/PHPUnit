<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{

	protected $user;

	public function setUp() : void 
	{
		$this->user = new User;
	}

	public function test_i_can_the_name()
	{
		$this->user->setName("Italo");

		$this->assertEquals($this->user->getName(), "Italo");
	}

	public function test_i_can_the_lastname()
	{
		$this->user->setLastName("Morales");

		$this->assertEquals($this->user->getLastName(), "Morales");
	}

	public function test_i_can_the_email()
	{
		$this->user->setEmail("i@hola.com");

		$this->assertEquals($this->user->getEmail(), "i@hola.com");
	}

	public function test_get_the_fullname()
	{
		$this->user->setName("Italo");
		$this->user->setLastName("Morales");

		$this->assertEquals($this->user->getFullName(), "Italo Morales");
	}

	public function test_get_the_fullname_empty()
	{
		$this->assertEmpty($this->user->getFullName());
	}

	public function test_name_lastname_email_without_spaces()
	{
		$this->user->setName("    Italo    ");
		$this->user->setLastName("    Morales    ");
		$this->user->setEmail("i@hola.com      ");

		$this->assertEquals($this->user->getName(), "Italo");
		$this->assertEquals($this->user->getLastName(), "Morales");
		$this->assertEquals($this->user->getEmail(), "i@hola.com");
	}

}








<?php
require_once "PHPUnit/Autoload.php";
require_once "User.php";

class UserTest extends PHPUnit_Framework_TestCase
{
    protected $user;

    protected function setUp() {
        $this->user = new User();
        $this->user->setName("Tom");
    }

    protected function tearDown() {
        unset($this->user);
    }

    public function testTalk() {
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }
}

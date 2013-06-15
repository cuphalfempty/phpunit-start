<?php
require_once "PHPUnit/Autoload.php";
require_once "User.php";

class UserTest extends PHPUnit_Framework_TestCase
{
    protected $user;

    protected function setUp() {
        $this->user = new User();
        $this->user->setName('Tom');
        $this->user->setPassword('secure');
    }

    protected function tearDown() {
        unset($this->user);
    }

    /**
     * Basic test
     */
    public function testTalk() {
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @param string $class Class name
     * @param string $method Method name
     */
    protected static function getMethod($class, $method) {
        $class = new ReflectionClass($class);
        $method = $class->getMethod($method);
        $method->setAccessible(true);
        return $method;
    }

    /**
     * Test of private method
     */
    public function testPassword() {
        $method = self::getMethod('User', 'getPassword');
        $expected = 'secure';

        $actual = $method->invokeArgs($this->user, array());
        $this->assertEquals($expected, $actual);
    }
}

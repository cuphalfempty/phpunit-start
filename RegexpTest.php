<?php
require_once "vendor/autoload.php";
require_once "Regexp.php";

/**
 * Example test with data privider
 */
class RegexpTest extends PHPUnit_Framework_TestCase
{
    protected function setUp() {
    }

    protected function tearDown() {
    }

    /**
     * @dataProvider provider
     */
    public function testUrl($url, $expected) {
        $result = Regexp::parseUrl($url);
        $this->assertEquals($expected, $result);
    }

    public function provider()
    {
        return array(
            array(
                'http://www.google.com',
                'google.com',
            ),
            array(
                'http://ww.google.com',
                'ww.google.com',
            ),
            array(
                'tp://ww.google.com/',
                'tp://ww.google.com/',
            ),
            array(
                'https://maps.google.com/',
                'maps.google.com',
            ),
            array(
                'www.maps.google.com/',
                'maps.google.com',
            ),
        );
    }

}


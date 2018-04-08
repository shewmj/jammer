<?php
use PHPUnit\Framework\TestCase;

class SetEntTest  extends TestCase {

    private $CI;

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('setent');
        $this->setent = new SetEnt();
    }

    function testValidId() {
        $expected = 123;
        $this->setent->id = $expected;
        $this->assertEquals($expected, $this->setent->id);
    }

    function testEmptyIdThrowsException() {
        $this->expectException('InvalidArgumentException');
        $this->setent->id = null;
    }

    function testValidName() {
        $expected = 'Valid Name';
        $this->setent->name = $expected;
        $this->assertEquals($expected, $this->setent->name);
    }

    function testEmptyNameThrowsException() {
        $this->expectException('Exception');
        $this->setent->name = null   ;
    }

    function testNameTooLongThrowsException() {
        $expected = 'This task name will be too long!!! This task name will be too long!!! This task name will be too long!!!';
        $this->expectException('Exception');
        $this->setent->name = $expected;
    }
}
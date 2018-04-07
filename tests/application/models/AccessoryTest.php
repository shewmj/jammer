<?php
use PHPUnit\Framework\TestCase;

class AccessoryTest  extends TestCase {

    private $CI;

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('accessory');
        $this->accessory = new Accessory();
    }

    function testValidId() {
        $expected = 123;
        $this->accessory->id = $expected;
        $this->assertEquals($expected, $this->accessory->id);
    }

    function testEmptyIdThrowsException() {
        $this->expectException('InvalidArgumentException');
        $this->accessory->id = null;
    }

    function testValidName() {
        $expected = 'Valid Name';
        $this->accessory->name = $expected;
        $this->assertEquals($expected, $this->accessory->name);
    }

    function testEmptyNameThrowsException() {
        $this->expectException('Exception');
        $this->accessory->name = null   ;
    }

    function testNameTooLongThrowsException() {
        $expected = 'This task name will be too long!!! This task name will be too long!!! This task name will be too long!!!';
        $this->expectException('Exception');
        $this->accessory->name = $expected;
    }

    function testValidCategories() {
        $expected = 'Protein';
        $this->accessory->category = $expected;
        $this->assertEquals($expected, $this->accessory->category);
        $expected = 'Topping';
        $this->accessory->category = $expected;
        $this->assertEquals($expected, $this->accessory->category);
        $expected =  'Grain';
        $this->accessory->category = $expected;
        $this->assertEquals($expected, $this->accessory->category);
        $expected = 'Veggie';
        $this->accessory->category = $expected;
        $this->assertEquals($expected, $this->accessory->category);
        $expected = 'Sauce';
        $this->accessory->category = $expected;
        $this->assertEquals($expected, $this->accessory->category);
    }

    function testInvalidCategoryThrowsException() {
        $this->expectException('Exception');
        $this->accessory->category = 'invalid';
    }

    function testValidCalories() {
        $expected = 0;
        $this->accessory->calories = $expected;
        $this->assertEquals($expected, $this->accessory->calories);
        $expected = 500;
        $this->accessory->calories = $expected;
        $this->assertEquals($expected, $this->accessory->calories);
    }

    function testNonNumericCaloriesThrowsException() {
        $expected = 'hi';
        $this->expectException('Exception');
        $this->accessory->calories = $expected;
    }

    function testTooLargeCaloriesThrowsException() {
        $expected = 501;
        $this->expectException('Exception');
        $this->accessory->calories = $expected;
    }

    function testValidSalt() {
        $expected = 0;
        $this->accessory->salt = $expected;
        $this->assertEquals($expected, $this->accessory->salt);
        $expected = 200;
        $this->accessory->salt = $expected;
        $this->assertEquals($expected, $this->accessory->salt);
    }

    function testNonNumericSaltThrowsException() {
        $expected = 'hi';
        $this->expectException('Exception');
        $this->accessory->salt = $expected;
    }

    function testTooLargeSaltThrowsException() {
        $expected = 201;
        $this->expectException('Exception');
        $this->accessory->price = $expected;
    }

    function testValidPrice() {
        $expected = 0;
        $this->accessory->price = $expected;
        $this->assertEquals($expected, $this->accessory->price);
        $expected = 0.50;
        $this->accessory->price = $expected;
        $this->assertEquals($expected, $this->accessory->price);
    }

    function testNonNumericPriceThrowsException() {
        $expected = 'hi';
        $this->expectException('Exception');
        $this->accessory->price = $expected;
    }

    function testTooLargePriceThrowsException() {
        $expected = 0.51;
        $this->expectException('Exception');
        $this->accessory->price = $expected;
    }

}
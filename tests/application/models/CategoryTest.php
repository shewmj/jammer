<?php
use PHPUnit\Framework\TestCase;

class CategoryTest  extends TestCase {

    private $CI;

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('category');
        $this->category = new Category();
    }

    function testValidId() {
        $expected = 123;
        $this->category->id = $expected;
        $this->assertEquals($expected, $this->category->id);
    }

    function testEmptyIdThrowsException() {
        $this->expectException('InvalidArgumentException');
        $this->category->id = null;
    }

    function testValidName() {
        $expected = 'Protein';
        $this->category->name = $expected;
        $this->assertEquals($expected, $this->category->name);
        $expected = 'Topping';
        $this->category->name = $expected;
        $this->assertEquals($expected, $this->category->name);
        $expected =  'Grain';
        $this->category->name = $expected;
        $this->assertEquals($expected, $this->category->name);
        $expected = 'Veggie';
        $this->category->name = $expected;
        $this->assertEquals($expected, $this->category->name);
        $expected = 'Sauce';
        $this->category->name = $expected;
        $this->assertEquals($expected, $this->category->name);
    }

    function testInvalidCategoryThrowsException() {
        $this->expectException('Exception');
        $this->category->name = 'invalid';
    }

}
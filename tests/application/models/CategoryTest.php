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
        $this->cateory->name = $expected;
        $this->assertEquals($expected, $this->cateory->name);
        $expected = 'Topping';
        $this->cateory->name = $expected;
        $this->assertEquals($expected, $this->cateory->name);
        $expected =  'Grain';
        $this->cateory->name = $expected;
        $this->assertEquals($expected, $this->cateory->name);
        $expected = 'Veggie';
        $this->cateory->name = $expected;
        $this->assertEquals($expected, $this->cateory->name);
        $expected = 'Sauce';
        $this->cateory->name = $expected;
        $this->assertEquals($expected, $this->cateory->name);
    }

    function testInvalidCategoryThrowsException() {
        $this->expectException('Exception');
        $this->category->name = 'invalid';
    }

}
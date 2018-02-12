<?php
class Accessories extends CSV_Model
{

    public $id; // PK
    public $name;
    public $category; // FK
    public $imageLocation;
    public $calories;
    public $salt;
    public $price;

    public function __construct()
    {
        parent::__construct("../data/BowlItem.csv", 'id');
    }
}

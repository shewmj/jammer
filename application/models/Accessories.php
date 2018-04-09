<?php
/**
* CSV_Model to get the ID (Primary Key), name, category, image reference,
* calories, salt and price to create a bowl item.
*/
class Accessories extends CSV_Model
{

    public $id; // PK
    public $name;
    public $category; // FK
    public $imageLocation;
    public $calories;
    public $salt;
    public $price;

    /**
    * Constructor that grabs the data from a BowlItem.csv file.
    */
    public function __construct()
    {
        parent::__construct("../data/BowlItem.csv", 'id');
    }
}

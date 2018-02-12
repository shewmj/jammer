<?php
class Set extends CSV_Model
{

    public $id; // PK
    public $name;
    // FKs
    public $Protein;
    public $Topping;
    public $Grain;
    public $Veggie;
    public $Sauce;

    public function __construct()
    {
        parent::__construct("../data/BowlSet.csv", 'id');
    }
}

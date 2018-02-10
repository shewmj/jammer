<?php
class Set extends CSV_Model
{

    public $setID;
    public $name;
    public $Protein;
    public $Topping;
    public $Grain;
    public $Veggie;
    public $Sauce;

    public function __construct()
    {
        parent::__construct("../data/BowlSet.csv", 'setID');
    }
}

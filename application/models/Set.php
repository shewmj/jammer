<?php
class Set extends CSV_Model
{

    public $id;
    public $name;
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

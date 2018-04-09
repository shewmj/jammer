<?php
/**
* CSV_Model to get the ID (a Primary Key) name, and a set of Foreign Key ID's
* bowl items to create a bowl set from a csv file.
**/
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

    /**
    * Constructor that grabs the data from a BowlSet.csv file.
    */
    public function __construct()
    {
        parent::__construct("../data/BowlSet.csv", 'id');
    }

    /**
    * For checking validation rules.
    */
    public function rules() {
        $config = array(
            ['field' => 'ProteinID', 'label' => 'protein', 'rules' => 'integer'],
            ['field' => 'GrainID', 'label' => 'grain', 'rules' => 'integer'],
            ['field' => 'ToppingID', 'label' => 'topping', 'rules' => 'integer'],
            ['field' => 'VeggieID', 'label' => 'veggie', 'rules' => 'integer'],
            ['field' => 'SauceID', 'label' => 'sauce', 'rules' => 'integer'],
        );
        return $config;
    }
}

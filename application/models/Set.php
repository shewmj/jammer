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

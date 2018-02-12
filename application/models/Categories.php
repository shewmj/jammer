<?php
class Categories extends CSV_Model
{

	public $id; // PK
	public $name;

	public function __construct()
	{
		parent::__construct("../data/Categories.csv", 'id');
	}
}

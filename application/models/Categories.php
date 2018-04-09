<?php
/**
* CSV_Model to get the ID (a Primary Key) and name to identify a category
* of bowl item.
*/
class Categories extends CSV_Model
{

	public $id;
	public $name;

	/**
	* Constructor that grabs the data from a Categories.csv file.
	*/
	public function __construct()
	{
		parent::__construct("../data/Categories.csv", 'id');
	}
}

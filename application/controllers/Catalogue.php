<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Controller to access bowl items (Accessories) in a database.
*/
class Catalogue extends Application
{

	/**
	 * Constructor for Catalogue Controller.
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Grabs all of the accessories informations and passes it
	 * to the catalogue view
	 */
	public function index()
	{
		//get all accessories
		$accessories = $this->Accessories->all();
		//get all categories
		$categories = $this->Categories->all();
		//inject model into controller
		$this->data['accessories'] = $accessories;
		//inject model into controller
		$this->data['categories'] = $categories;
		$this->data['pagebody'] = 'catalogue';
		$this->data['pagetitle'] = 'Catalog Page';
		$this->render();
	}
}

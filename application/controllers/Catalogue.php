<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Catalogue extends Application
{
	/**
	 * Index page.
	 */
	function __construct()
	{
		parent::__construct();
	}
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

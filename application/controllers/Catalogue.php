<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Catalog extends Application
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
		$accessories = $this->accessories->all();
		//get all categories
		$categories = $this->categories->all();
		//inject model into controller
		$this->data['accessories'] = $accessories;
		//inject model into controller
		$this->data['categories'] = $categories;
		$this->data['pagebody'] = 'catalog';
		$this->data['pagetitle'] = 'Catalog Page';
		$this->render();
	}
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$set = $this->Set->all();
		$this->data['set'] = $set;

		$setfirst = $this->Set->get(1);

		$this->data['protein'] = $this->Accessories->get($setfirst->protein)->imagelocation;
		$this->data['topping'] = $this->Accessories->get($setfirst->topping)->imagelocation;
		$this->data['grain'] = $this->Accessories->get($setfirst->grain)->imagelocation;
		$this->data['veggie'] = $this->Accessories->get($setfirst->veggie)->imagelocation;
		$this->data['sauce'] = $this->Accessories->get($setfirst->sauce)->imagelocation;


		$this->data['pagebody'] = 'welcome_message';
		$this->render();
	}

	

}

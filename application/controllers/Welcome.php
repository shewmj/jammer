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
		$this->data['name'] = $setfirst->name;

		$this->data['protein'] = $this->Accessories->get($setfirst->protein)->imagelocation;
		$this->data['topping'] = $this->Accessories->get($setfirst->topping)->imagelocation;
		$this->data['grain'] = $this->Accessories->get($setfirst->grain)->imagelocation;
		$this->data['veggie'] = $this->Accessories->get($setfirst->veggie)->imagelocation;
		$this->data['sauce'] = $this->Accessories->get($setfirst->sauce)->imagelocation;


		$this->data['calorieCount'] = $this->Accessories->get($setfirst->protein)->calories
			+ $this->Accessories->get($setfirst->topping)->calories
			+ $this->Accessories->get($setfirst->grain)->calories
			+ $this->Accessories->get($setfirst->veggie)->calories
			+ $this->Accessories->get($setfirst->sauce)->calories;

		$this->data['saltCount'] = $this->Accessories->get($setfirst->protein)->salt
			+ $this->Accessories->get($setfirst->topping)->salt
			+ $this->Accessories->get($setfirst->grain)->salt
			+ $this->Accessories->get($setfirst->veggie)->salt
			+ $this->Accessories->get($setfirst->sauce)->salt;

		$this->data['priceCount'] = $this->Accessories->get($setfirst->protein)->price
			+ $this->Accessories->get($setfirst->topping)->price
			+ $this->Accessories->get($setfirst->grain)->price
			+ $this->Accessories->get($setfirst->veggie)->price
			+ $this->Accessories->get($setfirst->sauce)->price;


		$this->data['pagebody'] = 'welcome_message';
		$this->render();
	}

	public function set($item)
	{
		$set = $this->Set->all();
		$this->data['set'] = $set;

		$setSelected = $this->Set->get($item);
		$this->data['name'] = $setSelected->name;

		$this->data['protein'] = $this->Accessories->get($setSelected->protein)->imagelocation;
		$this->data['topping'] = $this->Accessories->get($setSelected->topping)->imagelocation;
		$this->data['grain'] = $this->Accessories->get($setSelected->grain)->imagelocation;
		$this->data['veggie'] = $this->Accessories->get($setSelected->veggie)->imagelocation;
		$this->data['sauce'] = $this->Accessories->get($setSelected->sauce)->imagelocation;


		$this->data['calorieCount'] = $this->Accessories->get($setSelected->protein)->calories
			+ $this->Accessories->get($setSelected->topping)->calories
			+ $this->Accessories->get($setSelected->grain)->calories
			+ $this->Accessories->get($setSelected->veggie)->calories
			+ $this->Accessories->get($setSelected->sauce)->calories;

		$this->data['saltCount'] = $this->Accessories->get($setSelected->protein)->salt
			+ $this->Accessories->get($setSelected->topping)->salt
			+ $this->Accessories->get($setSelected->grain)->salt
			+ $this->Accessories->get($setSelected->veggie)->salt
			+ $this->Accessories->get($setSelected->sauce)->salt;

		$this->data['priceCount'] = $this->Accessories->get($setSelected->protein)->price
			+ $this->Accessories->get($setSelected->topping)->price
			+ $this->Accessories->get($setSelected->grain)->price
			+ $this->Accessories->get($setSelected->veggie)->price
			+ $this->Accessories->get($setSelected->sauce)->price;


		$this->data['pagebody'] = 'welcome_message';
		$this->render();
	}

}

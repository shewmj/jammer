<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Controller to get information about a bowl set and view existings sets of
* bowl items in the 'database' to display to user.
*/
class Welcome extends Application
{

	/**
	 * Grabs all of the sets and displays the first set along with its calories, saltiness,
	 * and price.
	 */
	public function index()
	{
		$this->set(1);
	}

	/**
	 * Displays a particular set and calculates the calories, saltiness, and price
	 * for that set
	 * @param $item - The index of the set to be displayed
	 */
	public function set($item)
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_USER || $role == ROLE_ADMIN)
		{
			$this->data['edit'] = '<a href="/SetController/Edit/' . $item . '" role="button" class="btn btn-lg btn-warning" style="color: white;">Edit Set</a>';
			$this->data['add'] = '<a href="/SetController/Add" role="button" class="btn btn-lg btn-success">Create Set</a>';
		}
		else
		{
			$this->data['edit'] = '';
			$this->data['add'] = '';
		}
		//inject set info to view
		$set = $this->Set->all();
		$this->data['set'] = $set;

		//inject selected set name to view
		$setSelected = $this->Set->get($item);
		$this->data['name'] = $setSelected->name;

		// Get the image urls for the accessories
		$this->data['protein'] = $this->Accessories->get($setSelected->protein)->imagelocation;
		$this->data['topping'] = $this->Accessories->get($setSelected->topping)->imagelocation;
		$this->data['grain'] = $this->Accessories->get($setSelected->grain)->imagelocation;
		$this->data['veggie'] = $this->Accessories->get($setSelected->veggie)->imagelocation;
		$this->data['sauce'] = $this->Accessories->get($setSelected->sauce)->imagelocation;


		// Calculate and inject calorie, salt, price values to view

		// Add up the calories of each accessory
		$this->data['calorieCount'] = $this->Accessories->get($setSelected->protein)->calories
			+ $this->Accessories->get($setSelected->topping)->calories
			+ $this->Accessories->get($setSelected->grain)->calories
			+ $this->Accessories->get($setSelected->veggie)->calories
			+ $this->Accessories->get($setSelected->sauce)->calories;

		// Add up the total salt
		$this->data['saltCount'] = $this->Accessories->get($setSelected->protein)->salt
			+ $this->Accessories->get($setSelected->topping)->salt
			+ $this->Accessories->get($setSelected->grain)->salt
			+ $this->Accessories->get($setSelected->veggie)->salt
			+ $this->Accessories->get($setSelected->sauce)->salt;

		// Add up all of the prices
		$this->data['priceCount'] = $this->Accessories->get($setSelected->protein)->price
			+ $this->Accessories->get($setSelected->topping)->price
			+ $this->Accessories->get($setSelected->grain)->price
			+ $this->Accessories->get($setSelected->veggie)->price
			+ $this->Accessories->get($setSelected->sauce)->price;

		//render page
		$this->data['pagebody'] = 'welcome_message';
		$this->render();
	}

}

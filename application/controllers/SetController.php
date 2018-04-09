<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Controller to add new sets and edit existings sets of bowl items in the 'database'
**/
class SetController extends Application
{

	/*
	* Sets up the view to add a new set
	*/
	public function Add()
	{

		//guests cannot add new sets
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST) {
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}

		$proteins = array();
		$grains = array();
		$toppings = array();
		$veggies = array();
		$sauces = array();

		$items = $this->Accessories->all();

		//sort accessories into categories
		for ($x = 1; $x <= sizeof($items); $x++) {
			$temp = $this->Accessories->get($x);

			$currItem = array('item' => '<option value="' . $temp->id . '">' . $temp->name . '</option>');

			if ($temp->category == "Protein") {
				$proteins[] = $currItem;
			}
			if ($temp->category == "Grain") {
				$grains[] = $currItem;
			}
			if ($temp->category == "Topping") {
				$toppings[] = $currItem;
			}
			if ($temp->category == "Veggie") {
				$veggies[] = $currItem;
			}
			if ($temp->category == "Sauce") {
				$sauces[] = $currItem;
			}
		}

		//pass accessories sorted by categories into view
		$this->data['proteins'] = $proteins;
		$this->data['grains'] = $grains;
		$this->data['toppings'] = $toppings;
		$this->data['veggies'] = $veggies;
		$this->data['sauces'] = $sauces;

		$this->data['setNum'] = sizeof($items = $this->Set->all()) + 1;
		$this->data['pagetitle'] = 'Create';
		$this->data['pagebody'] = 'setAdd';

		$this->render();
	}


	/**
	* Sets up the view to edit a existing set
	*
	* @param $setID - the id of the set being edited
	*/
	public function Edit($setID)
	{
		//guests cannot edit  sets
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST) {
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}

		$selectedSet = $this->Set->get($setID);


		$proteins = array();
		$grains = array();
		$toppings = array();
		$veggies = array();
		$sauces = array();

		$items = $this->Accessories->all();

		//sort accessories into categories
		for ($x = 1; $x <= sizeof($items); $x++) {
			$temp = $this->Accessories->get($x);

			if ($selectedSet->protein == $temp->id
			|| $selectedSet->grain == $temp->id
			|| $selectedSet->topping == $temp->id
			|| $selectedSet->veggie == $temp->id
			|| $selectedSet->sauce == $temp->id ) {
				$currItem = array('item' => '<option selected value="' . $temp->id . '">' . $temp->name . '</option>');
			} else {
				$currItem = array('item' => '<option value="' . $temp->id . '">' . $temp->name . '</option>');
			}

			if ($temp->category == "Protein") {
				$proteins[] = $currItem;
			}
			if ($temp->category == "Grain") {
				$grains[] = $currItem;
			}
			if ($temp->category == "Topping") {
				$toppings[] = $currItem;
			}
			if ($temp->category == "Veggie") {
				$veggies[] = $currItem;
			}
			if ($temp->category == "Sauce") {
				$sauces[] = $currItem;
			}
		}

		//pass accessories sorted by categories into view
		$this->data['proteins'] = $proteins;
		$this->data['grains'] = $grains;
		$this->data['toppings'] = $toppings;
		$this->data['veggies'] = $veggies;
		$this->data['sauces'] = $sauces;

		$this->data['setNum'] = $setID;
		$this->data['setName'] = $selectedSet->name;
		$this->data['pagetitle'] = 'Edit';
		$this->data['pagebody'] = 'setEdit';

		$this->render();
	}

	/**
	*  Retrieves data from the input form and validates to create a new set
	*/
	public function AddSet()
	{
		//guests cannot add new sets
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST) {
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}

		$this->load->model('Set');
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->Set->rules());

		//retrieve data
		$newSet = $this->input->post();
		$newSet = (object) $newSet;

		//validate
		if ($this->form_validation->run()) {
			$this->Set->add($newSet);
		} else {
			$this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
		}

		redirect('/Welcome/set/' .  $this->Set->highest());
	}

	/**
	* Retrieves data from the input form and validates to edit a existing set
	*/
	public function EditSet()
	{

		//guests cannot add new sets
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST) {
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}

		$this->load->model('Set');
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->Set->rules());

		//retrieve data
		$existingSet = $this->input->post();
		$existingSet = (object) $existingSet;

		//validate
		if ($this->form_validation->run()) {
			$this->Set->update($existingSet);
		} else {
			$this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
		}
		redirect('/Welcome/set/' . $existingSet->id);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SetController extends Application
{


	public function Add()
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}




		// $this->data['protein'] = $this->Accessories->get($setSelected->protein)->imagelocation;
		// $this->data['topping'] = $this->Accessories->get($setSelected->topping)->imagelocation;
		// $this->data['grain'] = $this->Accessories->get($setSelected->grain)->imagelocation;
		// $this->data['veggie'] = $this->Accessories->get($setSelected->veggie)->imagelocation;
		// $this->data['sauce'] = $this->Accessories->get($setSelected->sauce)->imagelocation;

		$proteins = array();
		$grains = array();
		$toppings = array();
		$veggies = array();
		$sauces = array();

		$items = $this->Accessories->all();

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


	public function Edit($setID)
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
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

		for ($x = 1; $x <= sizeof($items); $x++) {
			$temp = $this->Accessories->get($x);

			if ($this->Accessories->get($selectedSet->protein)->id == $temp->id 
				|| $this->Accessories->get($selectedSet->grain)->id == $temp->id 
				|| $this->Accessories->get($selectedSet->topping)->id == $temp->id 
				|| $this->Accessories->get($selectedSet->veggie)->id == $temp->id 
				|| $this->Accessories->get($selectedSet->sauce)->id == $temp->id ) {
				$currItem = array('item' => '<option selected="selected" value="' . $temp->id . '">' . $temp->name . '</option>');
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

		$this->data['proteins'] = $proteins;
		$this->data['grains'] = $grains;
		$this->data['toppings'] = $toppings;
		$this->data['veggies'] = $veggies;
		$this->data['sauces'] = $sauces;

		$this->data['setNum'] = $setID;

		$this->data['setName'] = $selectedSet->name;


		$this->data['pagetitle'] = 'Create';
		$this->data['pagebody'] = 'setEdit';
		
		$this->render();
	}








	public function AddSet()
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}



		$this->load->model('Set');
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->Set->rules());
		// $sets = (array) $this->Set->create();
		//var_dump($sets);
		$newSet = $this->input->post();
		var_dump($newSet);




		$newSet = (object) $newSet;  // convert back to object
		// validate away
		if ($this->form_validation->run())
		{	
			$this->Set->add($newSet);	
		} 
		else
		{
			$this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
		}

		redirect('/Welcome/set/' .  $this->Set->highest());



	}











	public function EditSet($set)
	{

		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}


		$this->load->model('Set');
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->Set->rules());
		// $sets = (array) $this->Set->create();
		//var_dump($sets);
		$existingSet = $this->input->post();
		var_dump($existingSet);


		$existingSet = (object) $existingSet;  // convert back to object
		// validate away
		if ($this->form_validation->run())
		{	
			$this->Set->update($existingSet);	
		} 
		else
		{
			$this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
		}

		redirect('/Welcome/set/' . $set);


	}



	private function loadModelIntoArray($data)
	{
		$tmp = array();
		foreach ($data as $d)
		{
			$item = array('item' => '<option value="' . $d->id . '">' . $d->Name . '</option>');
			array_push($tmp, $item);
		}
		return $tmp;
	}

}

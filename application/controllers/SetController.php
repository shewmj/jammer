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

		$items = $this->Accessories->all();

		for ($x = 1; $x <= 10; $x++) {
			$temp = $this->Accessories->get($x);
			$categoryTemp = $this->Accessories->get($x)->category;

			if ($categoryTemp == 'protein') {
				$proteins[] = $temp;
			}

		}

		$this->data['proteins'] = $proteins;

		$this->data['temp'] = "hiya";


// $items = array();

// while($row = mysql_fetch_array($result, MYSQL_BOTH)) {
//     $items[] = $row;
// }

		
		//inject selected set name to view
		// $setSelected = $this->Set->get($item);
		// $this->data['name'] = $setSelected->name;

		// Get the image urls for the accessories
		


		$this->data['pagetitle'] = 'Create';
		$this->data['pagebody'] = 'setAdd';
		// $this->load->model('SightModel');
		// $this->load->model('StockModel');
		// $this->load->model('BodyModel');
		// $this->load->model('BarrelModel');
		// $this->load->model('GripModel');
		// $sights = $this->loadModelIntoArray($this->SightModel->all());
		// $stocks = $this->loadModelIntoArray($this->StockModel->all());
		// $bodies = $this->loadModelIntoArray($this->BodyModel->all());
		// $barrels = $this->loadModelIntoArray($this->BarrelModel->all());
		// $grips = $this->loadModelIntoArray($this->GripModel->all());
		// $this->data['sights'] = $sights;
		// $this->data['stocks'] = $stocks;
		// $this->data['bodies'] = $bodies;
		// $this->data['barrels'] = $barrels;
		// $this->data['grips'] = $grips;
		$this->render();
	}

	// public function Add()
	// {
	// 	$role = $this->session->userdata('userrole');
	// 	if ($role == ROLE_GUEST)
	// 	{
	// 		redirect($_SERVER['HTTP_REFERER']); // back where we came from
	// 		return;
	// 	}
	// 	$this->load->model('SetModel');
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules($this->SetModel->rules());
	// 	$sets = (array) $this->SetModel->create();
	// 	var_dump($sets);
	// 	$sets = $this->input->post();
	// 	var_dump($sets);
	// 	$sets = (object) $sets;  // convert back to object
	// 	// validate away
	// 	if ($this->form_validation->run())
	// 	{
	// 		if (empty($sets->id))
	// 		{
	// 			$sets->id = $this->SetModel->highest() + 1;
	// 			var_dump($sets);
	// 			$this->SetModel->add($sets);
	// 		}
	// 		else
	// 		{
	// 			$this->SetModel->update($sets);
	// 		}
	// 	} 
	// 	else
	// 	{
	// 		$this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
	// 	}
	// 	redirect('/set/' . $this->SetModel->highest());
	// }


	public function Edit($set)
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			return;
		}
		
		$this->data['pagetitle'] = 'Edit Set ' . $set;
		$this->data['pagebody'] = 'SetEdit';
		$this->render();
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
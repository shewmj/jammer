<?php
/**
* Controller to check for a valid user role to access different page features.
*/
class Roles extends Application
{
	/**
	* Check if the user is allowed to access data or view.
	* @param $role if the user is logged in as a Guest
	*/
	public function actor($role = ROLE_GUEST)
	{
		$this->session->set_userdata('userrole',$role);
		redirect($_SERVER['HTTP_REFERER']); // back where we came from
	}
}

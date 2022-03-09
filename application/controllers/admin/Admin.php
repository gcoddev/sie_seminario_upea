<?php

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Admin extends CI_Controller
{
	public $data = [];


	public function index()
	{
	

		//   $this->data['contenido']="backend/dashboard";

		$this->load->view('plantilla_a', $this->data);
	}
}

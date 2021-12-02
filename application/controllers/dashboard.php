<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->rbac->check_user_authentication();	// checking user login session (rbac is a library function)
		$this->load->model('profile_model');
		$this->load->model('common_model');
	}

	//-----------------------------------------------------------------------------------
	// Update User Profile Functionality
	public function index()
	{		
		$user_id = $this->session->userdata('user_id');
		$data['leftsidebar'] = 'themes/jobseeker/leftsidebar';
		redirect(base_url('dashboard'),'refresh');
		
	}

}

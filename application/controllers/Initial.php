<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Initial extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("games_model");
	}

	public function index()
	{	
		$this->load->view('pages/initial-page');
	
	}

}

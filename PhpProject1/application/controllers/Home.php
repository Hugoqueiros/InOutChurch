<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('head');
                $this->load->view('template/navigation');
                $this->load->view('template/slider');
                $this->load->view('template/categories');
                $this->load->view('template/mid');
                $this->load->view('template/new_products');
                $this->load->view('footer');
	}
}
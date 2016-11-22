<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('on_air', array('error' => ' ' ));
	}

	public function page_1()
	{
		$this->load->view('example1', array('error' => ' ' ));
	}

}


// http://www.codingforums.com/archive/index.php/t-136009.html
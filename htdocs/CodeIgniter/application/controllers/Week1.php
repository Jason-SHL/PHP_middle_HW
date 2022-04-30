<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Week1 extends CI_Controller {

	#第一週程式
	public function index()
	{
		//echo "123";
		$data['name'] = 'bill';
		$data['age'] = ' 18';
		$data['number'] = ' 00223' ; 
		
		$this->load->view('Week1',$data);
		
	}

	
}

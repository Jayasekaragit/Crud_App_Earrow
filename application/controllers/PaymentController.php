<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('payment');
	}

    public function blogs()
	{
		$this->load->view('header');
	}
}
?>

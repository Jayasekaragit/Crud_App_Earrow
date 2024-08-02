<?php
class Pages extends CI_Controller {

        public function view(){

        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
        }
}
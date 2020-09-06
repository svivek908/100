<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
    class ex extends CI_Controller {
       
        public function index()  
        {  
             $this->load->helper('url');
              $this->load->view('header');
       /* $this->load->view('nav');*/  
        $this->load->view('content');
        $this->load->view("ex");  
        $this->load->view('footer');
        } }
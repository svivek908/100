<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class ad extends CI_Controller {   
        public function index()  
        {  $this->load->helper('url');
         $this->load->view('v');
         $this->load->view('v1');
 }
 public function database()
 {
 	$this->load->helper('url');
 	$nm=$this->input->post('nm');
 	$pass =$this->input->post('pass');
 		$email=$this->input->post('email');
 		$add=$this->input->post('add');
 	$this->load->database();
 	$data=array(
 		'nm'=>$this->input->post('nm'),
 		'pass'=>$this->input->post('pass'),
 		'email'=>$this->input->post('email'),
 		'add'=>$this->input->post('add'),

 	);
 	$this->db->insert('vs',$data);
 	echo "sucess";
echo $nm;
echo $pass;
echo $email;
echo $add;

 	 }
}

    ?>
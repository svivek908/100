    <?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class Baby_form extends CI_Controller {  
          
        public function index()  
        {  
             $this->load->helper('url');

              $this->load->view('header');

        $this->load->view('nav');  
        $this->load->view('content');  
        $this->load->view('footer');  
        }  
        public function viewform()  
        {  
             $this->load->view('header');
            $this->load->view('nav');
             $this->load->view("baby_form");
             $this->load->view('footer'); 

        }
        public function aboutus()
        {
            $this->load->view('header');
            $this->load->view('nav');
             $this->load->view("about_us");
             $this->load->view('footer'); 
        } 
         public function loginpage()
        {
          $this->load->view("login");
   
        }
        function savingdata()  
        {  

             $this->load->helper('url');
            $this->load->database(); 
            //this array is used to get fetch data from the view page.  
            $data = array(  
                            'name'     => $this->input->post('name'),  
                            'email'  => $this->input->post('email'),  
                            'number'   => $this->input->post('number'),  
                            'city' => $this->input->post('city'),
                            'gender' => $this->input->post('gender'),
                            'address' => $this->input->post('address'),
                            'extra' => $this->input->post('extra'),
                            'qualification' => $this->input->post('qualification'),);  
            //insert data into database table.  
            $this->db->insert('v1',$data); 
echo" data sucess fully submitted";
      
         /*   redirect("baby_form/index");*/
        }  
    }  
    ?>  
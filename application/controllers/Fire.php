  <?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class Fire extends CI_Controller {  
          
        public function fun()  
        {  
        	
            $this->load->view('first');
                        
        }
        function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'name'     => $this->input->post('name'),  
                        'email'  => $this->input->post('email'),  
                        'address'   => $this->input->post('address'),  
                        'number' => $this->input->post('number')  
                        );  
        //insert data into database table.  
        $this->db->insert('v1',$data);  
   
    }  
    }  
    ?>  
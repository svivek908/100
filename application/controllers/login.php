<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
    class Login extends CI_Controller {
      

    function __construct()
    {
        parent::__construct();
        // ob_start(); # add this
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->library('javascript');
        
        
    }
        public function index()  
        {  
             $this->load->helper('url');
            //  $this->load->view('header');
       /* $this->load->view('nav');*/  
        $this->load->view('content');
        $this->load->view("signup");  
       // $this->load->view('footer');
        } 
        public function login()
        {
          $this->load->helper('url');
          $this->load->view('mmhlogin');
           }
        public function add()
       {
        $this->load->helper('url');
$this->load->database();
             // $this->load->view('header');
               $this->load->view('mmhnav');
               $this->load->library('form_validation');
               $this->form_validation->set_rules('name','name','required');
               $this->form_validation->set_rules('detail','detail','required');
    if ($this->form_validation->run()==true) {
                 $upload_data = $this->upload_file();
    echo "<pre>";
    print_r($upload_data);
    echo "</pre>"."</br>";
    echo $upload_data['file_name'];
    $resume = $upload_data['file_name'];  
            $data = array( 
            'resume'     => $resume, 
                            'name'     => $this->input->post('name'),  
                            'detail'  => $this->input->post('detail'),  
                            'action'   => $this->input->post('action'),  
                            );  
            //insert data into database table.  
            $this->db->insert('product',$data); 
           redirect("http://localhost/100/index.php/admin/full");
               }
               else{
               }
           $this->load->view("mmhadd");
 }
       public function redirect()
       {$this->load->view("mmhlogin");
       echo "Enter valid userid and password";
 }
       public function session()
       {
        $this->load->library('session');
        $a=$this->input->post('userid');
        $b=$this->input->post('pass');
       /*echo $a;
        echo $b;
       */ 
        $this->load->helper('url');
         $ndata=array( 
          'userid'=>$a,
          'pass'=>$b
         );
         $this->load->model("mmhselect");
         //print_r($ndata);
        $querry=$this->session->set_userdata($ndata);
        
       $res=$this->mmhselect->select_data('admin',$ndata);
      if ($res) {
        //echo "string";
        redirect("http://localhost/ci/index.php/admin/full");
       } else {
         redirect("http://localhost/ci/index.php/admin/redirect");
 }
        }
        public function destroy()
        {$this->load->helper('url');
        $this->load->library('session');
         $data=array( 
          'userid'=>$this->input->post('userid'),
          'pass'=>$this->input->post('pass')
         );
         
$this->load->model("mmhselect");
       $querry=$this->session->sess_destroy($ndata);
       //print_r ($querry);
redirect("http://localhost/ci/index.php/admin/index");
        }
         public function full()
       { 
        $this->load->helper('url');
         $this->load->database();
             // $this->load->view('header');
               $this->load->view('mmhnav');

               $this->load->view("mmhwelcome");
                $this->load->model("mmhselect");
             $data["fetch_data"]=$this->mmhselect->fetch_data('product'
        );
           $this->load->view("mmhlist",$data);
       }
       function upload_file()
 {
$this->load->helper('url');
  $config['upload_path'] = './images/';
  $config['allowed_types'] = 'doc|docx|pdf|jpg|jpeg|png';
  $config['overwrite']=True;
  $config['max_size']='2048000';
  $config['max_width']='1024';
  $config['max_height']='768';
  $this->load->library('upload', $config);
  if($this->upload->do_upload('resume'))
  {
   return $this->upload->data();   
  }
  else
  {
   return $this->upload->display_errors();
  }
 }
public function select()
{
 $this->load->helper('url');
         $this->load->database();
             // $this->load->view('header');
               $this->load->view('mmhnav');
                $this->load->model("mmhselect");
             $data["select_data"]=$this->mmhselect->select_data('product',array('action' => "activate"));
        
           $this->load->view("mmhhalf",$data);
}
      public function update()
       {$this->load->helper('url');
        $this->load->database();
         $this->load->model("mmhselect");
         /*$id= $this->uri->segment(3);
         echo $id;*/
     $data["update"]=$this->mmhselect->update( 'product',array(
      'resume'=>$this->input->post('resume'),
       'name'=>$this->input->post('name'),
       'detail'=>$this->input->post('detail'),
       'action'=>$this->input->post('action')
              ),array('id'=>$this->uri->segment(3)));
              $this->load->view("mmheditform",$data);
     redirect("http://localhost/ci/index.php/admin/full");
       }
       public function delete()
       {$this->load->helper('url');
        $this->load->database();
        $id=$this->uri->segment(3);
        echo $id;
         $this->load->model("mmhselect");
       $this->mmhselect->delete('product',array(
        'id'=>$id));
//$this->load->view("mmhhalf",$data);
          redirect("http://localhost/ci/index.php/admin/full");
       }
 public function edit()
       {
        $this->load->database();
         $this->load->helper('url');
         //$this->load->view('header');
        $id= $this->uri->segment(3);
        //echo $id;
               $this->load->view('mmhnav');
              $this->load->model("mmhselect");   
             $data["select_data"]=$this->mmhselect->select_data('product',array('id' =>$id ));
             //print_r ($data["select_data"]);
             $this->load->view("mmheditform",$data);
             

       }
       public function addimages(){
        $this->load->helper('url');
        $upload_data = $this->upload_file();
    echo "<pre>";
    print_r($upload_data);
    echo "</pre>"."</br>";

       }
       
        function savingdata()  
        {  
          $this->load->helper('url');
            $this->load->database(); 
            //this array is used to get fetch data from the view page.
           /* $upload_data = $this->upload_file();
    echo "<pre>";
    print_r($upload_data);
    echo "</pre>"."</br>";
    echo $upload_data['file_name'];
    $resume = $upload_data['file_name'];*/  
            $data = array( 
            
                            'userid'     => $this->input->post('userid'),  
                            'email'  => $this->input->post('email'),  
                            'pass'   => $this->input->post('pass'), 
                            'cp'   => $this->input->post('cp'),  
                            );  
            //insert data into database table.  
            $this->db->insert('admin',$data); 
echo" data sucess fully submitted";
      
           redirect("http://localhost/ci/index.php/admin/index");
        }  
      
    
    public function singup()
    {
      $this->load->helper('url');
       // $this->load->view('header');
        $this->load->view('content');
      $this->load->view('signup');
    }}  
    ?>  
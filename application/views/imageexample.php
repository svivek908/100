
Ajay Mishra <mishra.aj14@gmail.com>
7:11 PM (1 hour ago)
to me

public function store(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $number = $this->input->post('number');
    $skills = $this->input->post('skills');
    //$resume = $this->input->post('resume');
    $position = $this->input->post('position');
    /*echo $name."</br>";
    echo $email."</br>";
    echo $number."</br>";
    echo $skills."</br>";
    echo $resume."</br>";
    echo $position."</br>";*/
    $upload_data = $this->upload_file();
    echo "<pre>";
    print_r($upload_data);
    echo "</pre>"."</br>";
    echo $upload_data['file_name'];
    $resume = $upload_data['file_name'];
    $data = array(
        'name'=>$name,
        'email'=>$email,
        'number'=>$number,
        'skill'=>$skills,
        'resume'=>$resume,
        'position'=>$position
        
        );
    $this->home->insert_data('job_portal',$data);
    /*$this->db->query("insert into job_portal(name,email,number,skill,resume,position)Values($name,$email)");*/
    //$from = 'support@makemyhouse.com';
    //$to = 'mishra.aj14@gmail.com';
    /*$message = "ajau mis";
   $this->sendmail($message,'mishra.aj14@gmail.com','From:support@makemyhouse.com',"sub");*/
    
    
  
}
function upload_file()
 {
  $config['upload_path'] = '/data/mmh/uploadss/';
  $config['allowed_types'] = 'doc|docx|pdf';
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


<?php     
   class mmhselect extends CI_Model  
   {  
       public function insert($data)  
      {  
         //data is retrive from this query   
          $this->db->get("product",$data); 
           
      }  
      public function fetch_data($tbl)  
      {  
         //data is retrive from this query 

$this->db->select('*');
//$this->db->where('$arr');
$query= $this->db->get($tbl); 
          return $query->result(); 
      } 
      public function select_data($tbl,$arr)  
      {  
         //data is retrive from this query 
$this->db->select('*');
$this->db->where($arr);
$query= $this->db->get($tbl); 
          return $query->result(); 

      } 

public function update($tbl,$data,$id)
{ 

 $this->db->where($id);  
$this->db->update( $tbl,$data); 

}
public function delete($table,$id)
{  $this->db->where($id);
$this->db->delete($table);  
}
  function can_login($userid,$pass)
  {
    $this->db->where('userid',$userid);
    $this->db->where('pass',$pass);
    $querry=$this->db->get('admin');
    if ($query->num_rows()>0) 
    {
    return true;

    } else {
      return false;
    
    }
    
  }


   }  
?> 

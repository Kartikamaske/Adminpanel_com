<?php
class ComLogin_model extends CI_Model {

    
  public function __construct()
  {
    $this->load->database();
  }

  public function AdminLogin($username,$password)
  {

	//check username and password before login
	  $this->db->select('username,password,registrationId');
	  $this->db->where('username',$username);
	  $this->db->where('password',$password);
	  $query=$this->db->get('registration_master');
		  //echo "no of rows".$query->num_rows();
			  if($query->num_rows()>0)
				  {
					  return $query->result();
				  }
			  else
				  {
					  return false;
				  }
  }


        
      public function getallUser()
      {      
               $this->db->select('registration_master.*');
               $this->db->from('registration_master');
               $this->db->where('registration_master.is_active','1');
               // $this->db->order_by("registration_master.registrationId", "desc"); 
 
               $query = $this->db->get();
               return $query->result();
              
      }


		
     


}
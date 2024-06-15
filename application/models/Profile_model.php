<?php
  class Profile_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }

        public function getstudentPhoto()
  
  {
   $userId= $this->session->userdata('userId');
    $this->db->select('registration_master.*');
    $this->db->from('registration_master');

    
    $this->db->where('registration_master.is_active','1');
    $this->db->where('registration_master.userId',$userId);
  
    // $this->db->order_by("registration_master.std_id", "desc");
    $query = $this->db->get();
    return $query->result();
    
  }

   public function updateRecord($model)
    {
      return $sql=$this->db->where('userId',$model['userId'])
              ->update('registration_master',$model);

    } 
}

?>
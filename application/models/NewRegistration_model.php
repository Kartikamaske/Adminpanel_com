<?php
  class NewRegistration_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function getUserByLogin()
      {
        
        $user_id= $this->session->userdata('registrationId');
        $this->db->select('registration_master.*,groupmain_master.*,group_master.groupname');
        $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');  
        $this->db->join('group_master','groupmain_master.fkgroupid = group_master.groupid','left');
        $this->db->from('registration_master');
        $this->db->where('registration_master.registrationId',$user_id);
        $query = $this->db->get();
        return $query->result();
      }

     public function getallUser()
     {      
      
              $this->db->select('registration_master.*,enquiry_master.enquirytype');
             $this->db->join('enquiry_master','registration_master.fkEnquiryTypeId = enquiry_master.enquiryid','left');  
              $this->db->from('registration_master');
              
              $this->db->where('registration_master.is_active','1');
              $this->db->order_by("registration_master.registrationId", "desc"); 

              $query = $this->db->get();
              return $query->result();
             
     }

     public function checkMobileExist($mobile_no){
       return $sql=$this->db->get_where('registration_master',['mobile_no'=>$mobile_no])->num_rows();
     }

     public function getallUserid($registrationId)
     {   
       $this->db->select('registration_master.*');
       $this->db->from('registration_master');
       $this->db->where('registration_master.registrationId',$registrationId);
       $this->db->where('registration_master.is_active','1');
       $query = $this->db->get();
       return $query->result();
   
     }
    
     public function getallEnquirytype()
     {      
            $this->db->select('enquiry_master.enquiryid,enquiry_master.enquirytype');
             $this->db->from('enquiry_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallTechnology()
     {      
            $this->db->select('technology_master.technologyId,technology_master.technologyname');
             $this->db->from('technology_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallDuration()
     {      
            $this->db->select('duration_master.durationId,duration_master.durationname');
             $this->db->from('duration_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallCollege()
     {      
            $this->db->select('collage_master.collageId,collage_master.collagename');
             $this->db->from('collage_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallQualification()
     {      
            $this->db->select('qualification_master.qualificationId,qualification_master.qualificationname');
             $this->db->from('qualification_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallSem()
     {      
            $this->db->select('sem_master.semId,sem_master.semname');
             $this->db->from('sem_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallJobrole()
     {      
            $this->db->select('role_master.roleId,role_master.rolename');
             $this->db->from('role_master');
              $query = $this->db->get();
              return $query->result();
             
     }
     
}
?>
<?php
  class UpdateUser_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
     public function getallUser()
     {      
      
            //  $this->db->select('student_master.id,student_master.studentname,student_master.phone');
            //  $this->db->from('student_master');
            //  $this->db->where('student_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              

              $this->db->select('registration_master.*');
              $this->db->from('registration_master');
           
              $this->db->where('registration_master.is_active','1');
              // $this->db->order_by("registration_master.registrationId", "desc"); 

              $query = $this->db->get();
              
              return $query->result();
             
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
     
    //  public function getenquiry()
    //  {      
      
        
    //         $this->db->select('enquiry_master.enquiryid,enquiry_master.enquirytype');
    //          $this->db->from('enquiry_master');
    //           $query = $this->db->get();
    //           return $query->result();
             
    //  }
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

     public function getallGroup()
     {
              $this->db->select('group_master.groupid,group_master.groupname');
              $this->db->from('group_master');
              $query = $this->db->get();
              return $query->result();
     }

      
    public function getallGroupMain($fkregisterid) 
		{
 			 $this->db->select('groupmain_master.fkregisterid,groupmain_master.fkgroupid,group_master.groupname');
      $this->db->join('registration_master','groupmain_master.fkregisterid  = registration_master.registrationId','left');
      $this->db->join('group_master','groupmain_master.fkgroupid  = group_master.groupid','left');
 			$this->db->from('groupmain_master');
			$this->db->where_in('groupmain_master.fkregisterid',$fkregisterid);
 			$this->db->where('groupmain_master.is_active',1);
			$query = $this->db->get();
			return $query->result();

 		 }

      function deleteRecord($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->delete($tableName);
        return $this->db->affected_rows();
    }


}
?>
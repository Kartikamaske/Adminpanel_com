<?php
  class AddGroup_model extends CI_Model {
    
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

      
      public function getallGroup(){
        $this->db->select('group_master.*');
        $this->db->from('group_master');
        $query = $this->db->get();
        return $query->result();
      }

      public function getallGroupById($groupid)
      {
               $this->db->select('group_master.groupid,group_master.groupname,group_master.grouplink');
               $this->db->from('group_master');
               $this->db->where('group_master.groupid',$groupid);
               $this->db->where('group_master.is_active','1');
               $query = $this->db->get();
               return $query->result();
      }

     public function getallGroupUser($fkregisterid) 
		{
      $this->db->select('groupuser_master.*');
      $this->db->join('registration_master','groupuser_master.fkregisterid  = registration_master.registrationId','left');
      $this->db->join('group_master','groupuser_master.fkgroupid  = group_master.groupid','left');
 			$this->db->from('groupuser_master');
			$this->db->where_in('groupuser_master.fkregisterid',$fkregisterid);
 			$this->db->where('groupuser_master.is_active',1);
			$query = $this->db->get();
			return $query->result();

 		 }

    public function getallUsersName()
    {      
            $this->db->select('registration_master.registrationId,registration_master.fname');
            $this->db->from('registration_master');
            // $this->db->where('registration_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }
    public function getallLeadersName()
    {      
            $this->db->select('registration_master.registrationId,registration_master.fname');
            $this->db->from('registration_master');
            // $this->db->where('registration_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }

    public function getallAddedUsers($fkgroupid)
    {      
    $this->db->select('registration_master.registrationId,registration_master.fname');
    $this->db->join('groupuser_master','registration_master.registrationId  = groupuser_master.fkregisterid','left');
     $this->db->join('group_master','groupuser_master.fkgroupid  = group_master.groupid','left');
    $this->db->from('registration_master');
    $this->db->where_in('groupuser_master.fkgroupid',$fkgroupid);
    $query = $this->db->get();
    return $query->result();
            
    }

     public function getallAddedLeader($fkgroupid){
     $this->db->select('registration_master.registrationId,registration_master.fname');
      $this->db->join('groupleader_master','registration_master.registrationId  = groupleader_master.fkregisterid','left');
       $this->db->join('group_master','groupleader_master.fkgroupid  = group_master.groupid','left');
      $this->db->from('registration_master');
      $this->db->where_in('groupleader_master.fkgroupid',$fkgroupid);
      $query = $this->db->get();
      return $query->result();
    }

    function deleteRecord($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->delete($tableName);
        return $this->db->affected_rows();
    }

   //   venues data by  id
   public function getAddedUserWithAllUsers($fkgroupid) 
   {
       $this->db->select('groupuser_master.fkgroupid,groupuser_master.fkregisterid,registration_master.fname');
      $this->db->join('group_master','groupuser_master.fkgroupid  = group_master.groupid','left');
      $this->db->join('registration_master','groupuser_master.fkregisterid  = registration_master.registrationId','left');

     
      $this->db->from('groupuser_master');
     $this->db->where_in('groupuser_master.fkgroupid',$fkgroupid);
      $this->db->where('groupuser_master.is_active',1);
     $query = $this->db->get();
     return $query->result();

     }

     public function getAddedLeaderWithAllUsers($fkgroupid) 
     {
         $this->db->select('groupleader_master.fkgroupid,groupleader_master.fkregisterid');
        $this->db->join('group_master','groupleader_master.fkgroupid  = group_master.groupid','left');
        $this->db->join('registration_master','groupleader_master.fkregisterid  = registration_master.registrationId','left');
       
        $this->db->from('groupleader_master');
       $this->db->where_in('groupleader_master.fkgroupid',$fkgroupid);
        $this->db->where('groupleader_master.is_active',1);
       $query = $this->db->get();
       return $query->result();
  
       }

}
?>
<?php
  class GroupStatusReport_model extends CI_Model {
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
               $this->db->select('registration_master.*');
             $this->db->join('enquiry_master','registration_master.fkEnquiryTypeId = enquiry_master.enquiryid','left');  
               $this->db->from('registration_master');
               $this->db->where('registration_master.is_active','1');
               $query = $this->db->get();
               return $query->result();
              
      }

    public function getallGroup(){
        $this->db->select('group_master.*');
        $this->db->from('group_master');
        $this->db->where('group_master.is_active','1');
        //  $this->db->order_by("group_master.groupid", "desc"); 
        $query = $this->db->get();
        return $query->result();
    }
   
    public function getActiveUser(){
      $this->db->select('registration_master.*');
            $this->db->from('registration_master');
            $this->db->where('registration_master.status','1');
           
            $query = $this->db->get();
            return $query->result();
    }

    public function getDeactiveUser(){
      $this->db->select('registration_master.*');
            $this->db->from('registration_master');
            $this->db->where('registration_master.status','2');
           
            $query = $this->db->get();
            return $query->result();
    }



    // public function getUserByGroupid($groupid)
    // {
    //       $this->db->select('registration_master.*');
    //       $this->db->from('registration_master');
    //       $this->db->where('is_active','1');
    //       $this->db->where('registration_master.fkgroupid',$groupid);
    //       $query = $this->db->get();
    //       return $query->result();
         
    // }


    public function getUserByGroupid($groupid)
    {
          $this->db->select('groupmain_master.fkregisterid,registration_master.*');
          // $this->db->join('group_master','registration_master.fkgroupid = group_master.groupid','left');
          // $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');
          $this->db->join('registration_master','groupmain_master.fkregisterid = registration_master.registrationId','left');


          $this->db->from('groupmain_master');
          $this->db->where('groupmain_master.fkgroupid',$groupid);
            
          $query = $this->db->get();
          return $query->result();
         
    }


    public function getUserByGroupStatusid($groupid,$status)
    {
          $this->db->select('groupmain_master.fkregisterid,registration_master.*');
          // $this->db->join('group_master','registration_master.fkgroupid = group_master.groupid','left');
          // $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');
          $this->db->join('registration_master','groupmain_master.fkregisterid = registration_master.registrationId','left');
          // $this->db->join('enquiry_master','registration_master.fkEnquiryTypeId = enquiry_master.enquiryid','left');  


          $this->db->from('groupmain_master');
          // $this->db->where('is_active','1');
          if($status==3||$status==0){
            $this->db->where('groupmain_master.fkgroupid',$groupid);
          }else{
            $this->db->where('registration_master.status',$status);
            $this->db->where('groupmain_master.fkgroupid',$groupid);
          }


          $query = $this->db->get();
          return $query->result();
         
    }
    

}
?>
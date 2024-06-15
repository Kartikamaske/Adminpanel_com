<?php
  class Indivisualtask_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }


      public function getuserid()
      {      
 
       // session used
       
             $ui= $this->session->userdata('registrationId');
 
              $this->db->select('registration_master.*');
              $this->db->from('registration_master');
              $this->db->where('registration_master.is_active','1');
              $this->db->where('registration_master.registrationId',$ui);
               $query = $this->db->get();
               return $query->result();
              
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

      public function getallfordetail()

      {      

              $this->db->select('indivisualtask_master.*');
              $this->db->from('indivisualtask_master');
              $this->db->where('indivisualtask_master.is_active','1');
              $this->db->order_by("indivisualtask_master.IndivisualtaskId","desc"); 
               $query = $this->db->get();
               return $query->result();
              
      }

      // ,DATE_FORMAT(created_date,"%d-%m-%y %h:%i:%s %p") as created_date

     public function getalldata()

     {      
      $ui= $this->session->userdata('registrationId');

             $this->db->select('indivisualtask_master.*,DATE_FORMAT(startdate,"%d-%m-%y %h:%i:%s %p") as startdate,DATE_FORMAT(expexteddatetime,"%d-%m-%y %h:%i:%s %p") as expexteddatetime,DATE_FORMAT(enddate,"%d-%m-%y %h:%i:%s %p") as enddate,registration_master.*');
             $this->db->join('registration_master','indivisualtask_master.fkuserId = registration_master.registrationId','left');  
             $this->db->from('indivisualtask_master');
             $this->db->where('indivisualtask_master.is_active','1');
             $this->db->where('indivisualtask_master.fkuserId',$ui);
             $this->db->order_by('indivisualtask_master.IndivisualtaskId',"desc");

              $query = $this->db->get();
              return $query->result();
             
     }


     public function getallUserid($IndivisualtaskId)
     {   

      
      $this->db->select('indivisualtask_master.*');
    //   $this->db->join('taskassignsub_master','indivisualtask_master.fkuserId = taskassignsub_master.taskassignsubId','left');
       $this->db->from('indivisualtask_master');
       $this->db->where('indivisualtask_master.IndivisualtaskId',$IndivisualtaskId);

      //  $this->db->where('taskassignsub_master.is_active','1');

       $query = $this->db->get();

       return $query->result();
   
     }


     public function checkFlag(){
      $this->db->select('indivisualtask_master.*');
        $this->db->from('indivisualtask_master');
        // $this->db->where('indivisualtask_master.attendId',$attendId);
        $i=$this->db->where('indivisualtask_master.processflag','1');

        if(!$i){
          
          $query = $this->db->get();
          return $query->result();
        }else{
          return false;
        }

        
    }




    }
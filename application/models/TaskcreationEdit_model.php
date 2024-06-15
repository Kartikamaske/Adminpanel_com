<?php
  class TaskcreationEdit_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }



      public function getalldata()
      {      
 
              $this->db->select('taskassignsub_master.*,task_master.*,registration_master.fname');

              $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left');

              $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 

               
              $this->db->from('taskassignsub_master');
              $this->db->where('taskassignsub_master.is_active','1');
               $query = $this->db->get();
               return $query->result();
              
      }


      public function getalltaskforupdate()
      {      

 
              $this->db->select('taskassignsub_master.*,task_master.*,registration_master.fname');

              $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left');

              $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 

              $this->db->from('taskassignsub_master');
              $this->db->where('taskassignsub_master.is_active','1');
               $query = $this->db->get();
               return $query->result();
              
      }

      public function getallUserid($taskassignsubId)
     {   
      //  $this->db->select('taskassignsub_master.*');
      $this->db->select('taskassignsub_master.*,task_master.*,registration_master.fname');

      $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left');

      // $this->db->join('taskassign_master','taskassignsub_master.fktaskassignId = taskassign_master.taskassignId','left');

      $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 

       $this->db->from('taskassignsub_master');

       $this->db->where('taskassignsub_master.taskassignsubId',$taskassignsubId);

      //  $this->db->where('taskassignsub_master.is_active','1');

       $query = $this->db->get();

       return $query->result();
   
     }








   


    }
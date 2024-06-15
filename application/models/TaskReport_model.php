<?php
  class TaskReport_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }

      public function getuserid()
      {      
 
       // session used
       
             $user_id= $this->session->userdata('registrationId');
 
              $this->db->select('registration_master.*');
              $this->db->from('registration_master');
              $this->db->where('registration_master.is_active','1');
              $this->db->where('registration_master.registrationId',$user_id);
             
               $query = $this->db->get();
 
               return $query->result();
              
      }

  
     public function getalltaskdetails()
     {      

      // session used
      
            // $user_id= $this->session->userdata('registrationId');

             $this->db->select('taskdetail_master.*');
            //  $this->db->join('country_master','taskdetail_master.fkcountry  = country_master.countryId','left');
             $this->db->from('taskdetail_master');
             $this->db->where('taskdetail_master.is_active','1');

            //  $this->db->where('taskdetail_master.taskdetailId',$user_id);
            
              $query = $this->db->get();

              return $query->result();
             
     }

    

    //  for show table data from task and 
    // registration master (for show particular user data)

     public function getalltaskcompleted()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('taskassignsub_master.*,task_master.*,registration_master.fname');

             $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

             $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
           
             $this->db->from('taskassignsub_master');
              // this line for completed condition for search bar
             $this->db->where('taskassignsub_master.processflag','2');

             $this->db->where('taskassignsub_master.is_active','1');

            //  get user id from session
             $this->db->where('taskassignsub_master.fkuserId',$user_id);


            //  $this->db->where('taskdetail_master.taskdetailId',$user_id);
            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }

     public function getalltaskrunning()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('taskassignsub_master.*,task_master.*,registration_master.fname');

             $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

             $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
           
             $this->db->from('taskassignsub_master');
              // this line for running condition for search bar
             $this->db->where('taskassignsub_master.processflag','1');

             $this->db->where('taskassignsub_master.is_active','1');

            //  get user id from session
             $this->db->where('taskassignsub_master.fkuserId',$user_id);


            //  $this->db->where('taskdetail_master.taskdetailId',$user_id);
            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }


     public function getalltaskpending()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('taskassignsub_master.*,task_master.*,registration_master.fname');

             $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

             $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
           
             $this->db->from('taskassignsub_master');
              // this line for pending condition for search bar
             $this->db->where('taskassignsub_master.processflag','0');

             $this->db->where('taskassignsub_master.is_active','1');

            //  get user id from session
             $this->db->where('taskassignsub_master.fkuserId',$user_id);


            //  $this->db->where('taskdetail_master.taskdetailId',$user_id);
            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }


    }
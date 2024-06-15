<?php
  class CombineReport_model extends CI_Model {
    
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

     public function getalltaskdetails()
     {      

      // session used
      
            // $user_id= $this->session->userdata('registrationId');

             $this->db->select('taskdetail_master.*');
            //  $this->db->join('country_master','taskdetail_master.fkcountry  = country_master.countryId','left');
             $this->db->from('taskdetail_master');
             $this->db->where('taskdetail_master.is_active','1');
            
              $query = $this->db->get();

              return $query->result();
             
     }

  

     public function getalltaskrunning()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('taskassignsub_master.*,DATE_FORMAT(taskassignsub_master.enddate,"%d-%m-%y %h:%i:%s %p") as enddate,DATE_FORMAT(taskassignsub_master.expexteddatetime,"%d-%m-%y %h:%i:%s %p") as expexteddatetime,DATE_FORMAT(taskassignsub_master.startdate,"%d-%m-%y %h:%i:%s %p") as startdate,DATE_FORMAT(taskassignsub_master.created_date,"%d-%m-%y %h:%i:%s %p") as created_date,registration_master.fname,task_master.tasktype,task_master.employeename,task_master.taskname,task_master.description,task_master.photo1,task_master.photo2,task_master.photo3,task_master.photo4,task_master.photo5,0 as IndivisualtaskId');

             $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

             $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
           
             $this->db->from('taskassignsub_master');

              // this line for running condition for search bar
             $this->db->where('taskassignsub_master.processflag','1');

             $this->db->where('taskassignsub_master.is_active','1');

            //  get user id from session
             $this->db->where('taskassignsub_master.fkuserId',$user_id);

             $this->db->order_by('taskassignsub_master.taskassignsubId',"desc");
            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }

     public function getalltaskrunnings()
     {      

              $user_id= $this->session->userdata('registrationId');
              $this->db->select('indivisualtask_master.*,DATE_FORMAT(indivisualtask_master.startdate,"%d-%m-%y %h:%i:%s %p") as startdate,DATE_FORMAT(indivisualtask_master.expexteddatetime,"%d-%m-%y %h:%i:%s %p") as expexteddatetime,DATE_FORMAT(indivisualtask_master.created_date,"%d-%m-%y %h:%i:%s %p") as created_date,registration_master.fname');

              $this->db->join('registration_master','indivisualtask_master.fkuserId = registration_master.registrationId','left'); 
            //  $this->db->join('indivisualtask_master','taskassignsub_master.fkuserId  = indivisualtask_master.fkuserId','left'); 

           
             $this->db->from('indivisualtask_master');

              // this line for running condition for search bar

             $this->db->where('indivisualtask_master.processflag','1');

            //  $this->db->where('taskassignsub_master.is_active','1');


            //  get user id from session
             $this->db->where('indivisualtask_master.fkuserId',$user_id);

             $this->db->order_by('indivisualtask_master.IndivisualtaskId',"desc");
            //  $this->db->where('indivisualtask_master.fkuserId',$user_id);

              $query = $this->db->get();
              return $query->result();
            
             
     }


    public function getalltaskcompleted()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('taskassignsub_master.*,DATE_FORMAT(taskassignsub_master.enddate,"%d-%m-%y %h:%i:%s %p") as enddate,DATE_FORMAT(taskassignsub_master.expexteddatetime,"%d-%m-%y %h:%i:%s %p") as expexteddatetime,DATE_FORMAT(taskassignsub_master.startdate,"%d-%m-%y %h:%i:%s %p") as startdate,task_master.taskname,task_master.description,task_master.tasktype,registration_master.fname,0 as IndivisualtaskId');

             $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

             $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
           
             $this->db->from('taskassignsub_master');

              // this line for running condition for search bar
             $this->db->where('taskassignsub_master.processflag','2');

            //  $this->db->where('indivisualtask_master.processflag','1');

            //  $this->db->group_by('taskname','description');


             $this->db->where('taskassignsub_master.is_active','1');

            //  get user id from session
             $this->db->where('taskassignsub_master.fkuserId',$user_id);
            //  $this->db->where('indivisualtask_master.fkuserId',$user_id);

            $this->db->order_by('taskassignsub_master.taskassignsubId',"desc");

            //  $this->db->where('taskdetail_master.taskdetailId',$user_id);
            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }

     public function getalltaskcompletedindivisual()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('indivisualtask_master.*,DATE_FORMAT(indivisualtask_master.startdate,"%d-%m-%y %h:%i:%s %p") as startdate,DATE_FORMAT(indivisualtask_master.expexteddatetime,"%d-%m-%y %h:%i:%s %p") as expexteddatetime,DATE_FORMAT(indivisualtask_master.enddate,"%d-%m-%y %h:%i:%s %p") as enddate,DATE_FORMAT(indivisualtask_master.created_date,"%d-%m-%y %h:%i:%s %p") as created_date');

             $this->db->from('indivisualtask_master');

              // this line for running condition for search bar

             $this->db->where('indivisualtask_master.processflag','2');

            //  $this->db->where('taskassignsub_master.is_active','1');


            //  get user id from session
             $this->db->where('indivisualtask_master.fkuserId',$user_id);
            //  $this->db->where('indivisualtask_master.fkuserId',$user_id);

            $this->db->order_by('indivisualtask_master.IndivisualtaskId',"desc");

            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }



     public function getalltaskpending()
     {      

      $user_id= $this->session->userdata('registrationId');

              $this->db->select('taskassignsub_master.*,DATE_FORMAT(taskassignsub_master.enddate,"%d-%m-%y %h:%i:%s %p") as enddate,DATE_FORMAT(taskassignsub_master.expexteddatetime,"%d-%m-%y %h:%i:%s %p") as expexteddatetime,DATE_FORMAT(taskassignsub_master.startdate,"%d-%m-%y %h:%i:%s %p") as startdate,
              DATE_FORMAT(taskassignsub_master.created_date,"%d-%m-%y %h:%i:%s %p") as created_date,task_master.employeename,task_master.taskname,task_master.description,task_master.photo1,task_master.photo2,task_master.photo3,task_master.photo4,task_master.photo5,registration_master.fname');

             $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

             $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
           
             $this->db->from('taskassignsub_master');
              // this line for pending condition for search bar
             $this->db->where('taskassignsub_master.processflag','0');

             $this->db->where('taskassignsub_master.is_active','1');

            //  get user id from session
             $this->db->where('taskassignsub_master.fkuserId',$user_id);


            $this->db->order_by('taskassignsub_master.taskassignsubId',"desc");
            
              $query = $this->db->get();
              
              return $query->result();
            
             
     }




    }
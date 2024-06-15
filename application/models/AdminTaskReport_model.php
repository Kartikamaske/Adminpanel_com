<?php
  class AdminTaskReport_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }


      public function getUserByLogin()
      {
        $user_id= $this->session->userdata('registrationId');
        $this->db->select('registration_master.*,groupmain_master.*,group_master.groupname,group_master.groupid');
        $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');  
        $this->db->join('group_master','groupmain_master.fkgroupid = group_master.groupid','left');
        $this->db->from('registration_master');
        $this->db->where('registration_master.registrationId',$user_id);
        $query = $this->db->get();
        return $query->result();
      }

      // SELECT `fkregisterid` FROM `groupmain_master` WHERE `fkgroupid`=2
      // SELECT `groupmainid`, `fkregisterid`, `fkgroupid` FROM `groupmain_master` WHERE `fkgroupid`=2
      public function getAllUserByLeaderLogin(){

        $user_id= $this->session->userdata('registrationId');

        if($user_id==1){
        $this->db->select('registration_master.*'); 
        $this->db->from('registration_master');
        $query = $this->db->get();
        return $query->result();
        }else{
          $sql='SELECT groupmain_master.fkregisterid,registration_master.registrationId,registration_master.fname,groupmain_master.fkgroupid FROM `groupleader_master` INNER JOIN groupmain_master on groupmain_master.fkgroupid=groupleader_master.fkgroupid LEFT OUTER JOIN registration_master on registration_master.registrationId=groupmain_master.fkregisterid WHERE groupleader_master.fkregisterid ='.$user_id.' GROUP BY groupmain_master.fkregisterid';

          $query = $this->db->query($sql);
          return $query->result();
        }


      }


      public function getallUser()

      {      
               $this->db->select('registration_master.*');
               $this->db->from('registration_master');
               $this->db->where('registration_master.is_active','1');
               $query = $this->db->get();
               return $query->result();
              
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



    public function getalltaskrunning($user,$groupId)
    {      

     $user_id= $this->session->userdata('registrationId');

             $this->db->select('taskassignsub_master.*,registration_master.fname,registration_master.registrationId,task_master.taskname,task_master.description,task_master.tasktype,0 as IndivisualtaskId');

            $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

            $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left');
            
            $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');
          
            $this->db->from('taskassignsub_master');

             // this line for running condition for search bar
            $this->db->where('taskassignsub_master.processflag','1');

            $this->db->where('taskassignsub_master.is_active','1');

           //  get user id from session
            // $this->db->where('taskassignsub_master.fkuserId',$user_id);

            $this->db->order_by('taskassignsub_master.taskassignsubId',"desc");
            if($user>0){

              $this->db->where('registration_master.registrationId ',$user);
            }else{

              $this->db->where_in('groupmain_master.fkgroupid ',$groupId);
            }
             $query = $this->db->get();
             
             return $query->result();
            // return $this->db->last_query();
            
    }

    public function getalltaskrunnings($user,$groupId)
    {      

     $user_id= $this->session->userdata('registrationId');

             $this->db->select('indivisualtask_master.*,registration_master.fname,registration_master.registrationId');

            $this->db->join('registration_master','indivisualtask_master.fkuserId = registration_master.registrationId','left'); 
            $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');

            $this->db->from('indivisualtask_master');
 

             // this line for running condition for search bar

            $this->db->where('indivisualtask_master.processflag',1);
            if($user>1){
              $this->db->where('registration_master.registrationId ',$user);
            }
            else{

              $this->db->where_in('groupmain_master.fkgroupid ',$groupId);
            }
            
            $this->db->order_by('indivisualtask_master.IndivisualtaskId',"desc");
            $query = $this->db->get();
            return $query->result();
            
    }
   
    public function getalltaskcompleted($user,$groupId)
    {      

    //  $user_id= $this->session->userdata('registrationId');

             $this->db->select('taskassignsub_master.*,task_master.taskname,task_master.description,task_master.tasktype,registration_master.fname,registration_master.registrationId,0 as IndivisualtaskId');

            $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 

            $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left');
            $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left'); 
          
            $this->db->from('taskassignsub_master');

             // this line for running condition for search bar
            $this->db->where('taskassignsub_master.processflag',2);

            $this->db->where('taskassignsub_master.is_active','1');

           $this->db->order_by('taskassignsub_master.taskassignsubId',"desc");
            if($user>0){
              $this->db->where('registration_master.registrationId',$user);
            }
            else{

              $this->db->where_in('groupmain_master.fkgroupid ',$groupId);
            }
           
             $query = $this->db->get();
             return $query->result();
            
    }


    public function getalltaskcompletedindivisual($user,$groupId)
     {      

              $this->db->select('indivisualtask_master.*,registration_master.fname,registration_master.registrationId');
              $this->db->join('registration_master','indivisualtask_master.fkuserId = registration_master.registrationId','left'); 
              $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left'); 
             $this->db->from('indivisualtask_master');
             $this->db->where('indivisualtask_master.processflag',2);
             if($user>0){
              $this->db->where('registration_master.registrationId',$user);
             }
             else{

              $this->db->where_in('groupmain_master.fkgroupid ',$groupId);
            }
            
            $this->db->order_by('indivisualtask_master.IndivisualtaskId',"desc");
              $query = $this->db->get();
              return $query->result();
     }



    public function getsearchdataown()
    {      
      
             $this->db->select('indivisualtask_master.*,registration_master.*');
             $this->db->join('registration_master','indivisualtask_master.fkuserId = registration_master.registrationId','left'); 
            $this->db->from('indivisualtask_master');
            $this->db->where('indivisualtask_master.processflag',2);
             $query = $this->db->get();
             return $query->result();
    }


    public function getsearchdataindivisual()
    {      
             $this->db->select('indivisualtask_master.*,registration_master.*');
             $this->db->join('registration_master','indivisualtask_master.fkuserId = registration_master.registrationId','left'); 
            $this->db->from('indivisualtask_master');
            $this->db->where('indivisualtask_master.processflag',1);
             $query = $this->db->get();
             return $query->result();
    }

    public function getloginleadergroup()
    {      
      $user_id= $this->session->userdata('registrationId');
             $this->db->select('groupleader_master.fkgroupid');
             
            $this->db->from('groupleader_master');
            $this->db->where('groupleader_master.fkregisterid',$user_id);
             $query = $this->db->get();
             return $query->result();
    }


     public function getalltaskpending($user,$groupId)
     {      

      $user_id= $this->session->userdata('registrationId');
            $this->db->select('taskassignsub_master.*,task_master.taskname,task_master.description,task_master.tasktype,registration_master.fname,registration_master.registrationId');
            $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 
            $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
            $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left'); 
            $this->db->from('taskassignsub_master');
             // this line for pending condition for search bar
            $this->db->where('taskassignsub_master.processflag','0');

            if($user>0){
             $this->db->where('registration_master.registrationId',$user);
             $this->db->where('taskassignsub_master.is_active','1');
             $this->db->order_by('taskassignsub_master.taskassignsubId',"desc");
            }
            else{

              $this->db->where_in('groupmain_master.fkgroupid ',$groupId);
            }


              $query = $this->db->get();
              return $query->result();
          
     }

     public function getOneUser($user){
        
      $this->db->join('task_master','taskassignsub_master.fktaskID = task_master.taskId','left'); 
      $this->db->join('registration_master','taskassignsub_master.fkuserId = registration_master.registrationId','left'); 
      $this->db->join('indivisualtask_master','taskassignsub_master.fkuserId = indivisualtask_master.fkuserId','left'); 
      $this->db->from('taskassignsub_master');
      $this->db->where('taskassignsub_master.processflag','1');
      $this->db->where('indivisualtask_master.processflag','1');
      $this->db->where('taskassignsub_master.fkuserId',$user);
     $query = $this->db->get();
      return $query->result();
}

}
?>
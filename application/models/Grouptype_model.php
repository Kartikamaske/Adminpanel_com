<?php
  class Grouptype_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }

      public function getdataWhenLeaderlogin(){
        $user_id= $this->session->userdata('registrationId');
        
        // $sql='SELECT usermaster.fkgroupid,group_master.groupname,registration_master.registrationId,registration_master.fname FROM `groupmain_master` LEFT OUTER JOIN groupmain_master as usermaster on usermaster.fkgroupid=groupmain_master.fkgroupid  LEFT OUTER JOIN registration_master on registration_master.registrationId=usermaster.fkregisterid LEFT OUTER JOIN group_master on group_master.groupid=usermaster.fkgroupid WHERE groupmain_master.fkregisterid='.$user_id.' GROUP by  groupid';

        $sql='SELECT groupmain_master.fkregisterid,group_master.groupid, group_master.groupname FROM `groupleader_master`   INNER JOIN groupmain_master on groupmain_master.fkgroupid=groupleader_master.fkgroupid LEFT OUTER JOIN registration_master on registration_master.registrationId=groupmain_master.fkregisterid LEFT OUTER JOIN group_master on group_master.groupid=groupmain_master.fkgroupid WHERE groupleader_master.fkregisterid='.$user_id.' GROUP BY groupmain_master.fkgroupid';

         $query = $this->db->query($sql);
        return $query->result();

   // registration_master.registrationId, registration_master.fname,
        // $this->db->join('registration_master', 'groupmain_master.fkregisterid  = registration_master.registrationId', 'left');
        // $this->db->group_by('registration_master.registrationId');

        // $this->db->select('groupmain_master.*, group_master.*, registration_master.*');
        // $this->db->join('group_master', 'groupmain_master.fkgroupid = group_master.groupid', 'left');
        // $this->db->join('registration_master', 'groupmain_master.fkregisterid  = registration_master.registrationId', 'left');
        // $this->db->from('groupmain_master');
        // $this->db->where('registration_master.registrationId', $user_id);
        
        // $query = $this->db->get();
        // $result = $query->result();
       

      }

      public function getUserByLogin()
      {

        $user_id= $this->session->userdata('registrationId');
        $this->db->select('registration_master.*,groupmain_master.*,group_master.groupid,group_master.groupname');
        $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');  
        $this->db->join('group_master','groupmain_master.fkgroupid = group_master.groupid','left');
        $this->db->from('registration_master');
        $this->db->where('registration_master.registrationId',$user_id);
        $query = $this->db->get();
        return $query->result();
      }

      public function getgroupbyuserlogin(){

        $sql='SELECT groupmain_master.fkregisterid,registration_master.fname,groupmain_master.fkgroupid FROM `groupleader_master`   INNER JOIN groupmain_master on groupmain_master.fkgroupid=groupleader_master.fkgroupid LEFT OUTER JOIN registration_master on registration_master.registrationId=groupmain_master.fkregisterid WHERE groupleader_master.fkregisterid='.$user_id.' GROUP BY groupmain_master.fkregisterid';

        $query = $this->db->query($sql);
        return $query->result();
        
      }
      
      public function getGroupByUserAdded()
      {
        $user_id= $this->session->userdata('registrationId');
        $this->db->select('registration_master.*,groupmain_master.*,group_master.groupname');
        $this->db->join('groupmain_master','registration_master.registrationId = groupmain_master.fkregisterid','left');  
        $this->db->join('group_master','groupmain_master.fkgroupid = group_master.groupid','left');
        $this->db->from('registration_master');
        if($user_id>1){
          $this->db->where('registration_master.registrationId',$user_id);
        }
        $query = $this->db->get();
        return $query->result();
      }

      public function getgroup()
      {      

        $this->db->select('group_master.*,');
        $this->db->from('group_master');
        $this->db->where('group_master.is_active','1'); 
         $query = $this->db->get();
         return $query->result();
  
    }

    // edit code
    public function getselectuser($groupid)
      {   
        // $this->db->where_in('group_id',$groupid);
        //  $query = $this->db->get('group_master')->result_array();
        //  echo $this->db->last_query();
        // return  $query;
        
        $this->db->select('groupmain_master.fkregisterid,registration_master.registrationId,registration_master.fname');
        $this->db->join('registration_master','groupmain_master.fkregisterid = registration_master.registrationId','left');

        $this->db->from('groupmain_master');
        $this->db->where('groupmain_master.is_active','1');
        $this->db->where_in('groupmain_master.fkgroupid',$groupid);
        $this->db->group_by('registration_master.registrationId');
         $query = $this->db->get();
         return $query->result();
    }


    //dropdown fetch function for task type
    
    public function getselectTask()
      {      
        $this->db->select('tasktype_master.tasktypeid,tasktype_master.tasktypename');

        // $this->db->join('taskdetail_master','tasktype_master.fktasktype = taskdetail_master.taskdetailId','left');
        
        $this->db->from('tasktype_master');
        $this->db->where('tasktype_master.is_active','1');
         $query = $this->db->get();
         return $query->result();
        
    }



//     SELECT *
// FROM taskassignsub_master
// INNER JOIN task_master ON taskassignsub_master.fktaskId = task_master.tasktype;

    public function gettaskassignsub()
      {      
        $this->db->select('taskassignsub_master.*');

        // $this->db->join('tasktype_master','taskassignsub_master.fktaskID = tasktype_master.tasktypeid','left');
        
        $this->db->from('taskassignsub_master');
        $this->db->where('taskassignsub_master.is_active','1');

        // $this->db->where('taskassignsub_master.is_active','1');
        
        // $this->db->where('taskassignsub_master.fkuserId', 'fkuserId');
        // $this->db->where('taskassignsub_master.fktaskID >', 'fktaskID');

         $query = $this->db->get();
         return $query->result();


//          $data = array(
//           (object) array('fktaskID' => 1, 'fkuserId' => 'Task 1', 'is_active' => '1'),
//           (object) array('fktaskID' => 2, 'fkuserId' => 'Task 2', 'is_active' => '1'),
//           (object) array('fktaskID' => 4, 'fkuserId' => 'Task 4', 'is_active' => '1'),
//           (object) array('fktaskID' => 5, 'fkuserId' => 'Task 5', 'is_active' => '1'),
//       );
  
//       return $data;

//       $activeTasks = gettaskassignsub();

// // Display the data
// foreach ($activeTasks as $task) {
//     echo "Task ID: " . $task->fktaskID . ", Task Name: " . $task->fkuserId . "\n";
// }

   
        
    }

  
    //    get all registration

    public function getallUsers()
    {      
     
            $this->db->select('registration_master.*');
            $this->db->from('registration_master');
            $this->db->where('registration_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }



   
// store table data in database create code
    public function gettaskbyID($taskid)
    {
          $this->db->select('task_master.*,tasktype_master.tasktypename');

          $this->db->join('tasktype_master','task_master.tasktype = tasktype_master.tasktypeid','left');

           $this->db->from('task_master');

           $this->db->where('task_master.is_active','1');
            $this->db->where_in('task_master.tasktype',$taskid);
         
           

             $query = $this->db->get();
             return $query->result();
         
    }


    // task assign form save query
    
    

    //  for update taskassign form this function used

    function deleteRecord($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->delete($tableName);
        return $this->db->affected_rows();
    }


    public function getGroupName(){
      $this->db->select('group_master.groupid,group_master.groupname'); 
           $this->db->from('group_master');
           $this->db->where('group_master.is_active','1');
            $query = $this->db->get();
            return $query->result();
  }



   // edit code

  //  for detail view save 

   public function getgroupmodify()
   {      
   
     $this->db->select('taskassign_master.*,');
     $this->db->from('taskassign_master');
     $this->db->where('taskassign_master.is_active','1'); 
     $this->db->order_by("taskassign_master.taskassignId", "desc"); 
      $query = $this->db->get();
      return $query->result();
   
   }

    
    //   three masters join for update group name
    public function getgroupdata($fktaskassignId) 
		{
 			 $this->db->select('taskassigngroup_master.fktaskassignId,taskassigngroup_master.fkgroupId,group_master.groupname');
       $this->db->join('taskassign_master','taskassigngroup_master.fktaskassignId  = taskassign_master.taskassignId','left');
       $this->db->join('group_master','taskassigngroup_master.fkgroupId  = group_master.groupid','left');

			
 			$this->db->from('taskassigngroup_master');
			$this->db->where_in('taskassigngroup_master.fktaskassignId',$fktaskassignId);
 			$this->db->where('taskassigngroup_master.is_active',1);
			$query = $this->db->get();
			return $query->result();

 		 }

// for update selectuser join query for 3 masters 
    //   public function getselectuserdata($fktaskassignId) 
		// {
 		// 	 $this->db->select('taskassignuser_master.fktaskassignId,taskassignuser_master.fkuserId,registration_master.fname,registration_master.registrationId ');
    //    $this->db->join('taskassign_master','taskassignuser_master.fktaskassignId  = taskassign_master.taskassignId','left');
    //    $this->db->join('registration_master','taskassignuser_master.fkuserId  = registration_master.registrationId','left');

			
 		// 	$this->db->from('taskassignuser_master');
		// 	$this->db->where_in('taskassignuser_master.fktaskassignId',$fktaskassignId);
    //   // $this->db->group_by('taskassignuser_master.registrationId');
 		// 	$this->db->where('taskassignuser_master.is_active',1);
		// 	$query = $this->db->get();
		// 	return $query->result();

 		//  }



      public function getselectuserdata($fktaskassignId) 
      {
          $this->db->select('taskassignsub_master.fktaskassignId,taskassignsub_master.fkuserId,registration_master.fname,registration_master.registrationId ');

         $this->db->join('taskassign_master','taskassignsub_master.fktaskassignId  = taskassign_master.taskassignId','left');
         
         $this->db->join('registration_master','taskassignsub_master.fkuserId  = registration_master.registrationId','left');
  
         $this->db->from('taskassignsub_master');
        $this->db->where_in('taskassignsub_master.fktaskassignId',$fktaskassignId);
        // $this->db->group_by('taskassignsub_master.registrationId');
         $this->db->where('taskassignsub_master.is_active',1);
        $query = $this->db->get();
        return $query->result();
  
        }

    //  for table update code

      public function gettaskdata($fktaskassignId) 
		{
 			 $this->db->select('taskassigntask_master.fktaskassignId,taskassigntask_master.fkcheck,
       taskassigntask_master.fktaskID,taskassigntask_master.fktasklist,tasktype_master.tasktypename,taskassigntask_master.fktasktype');


       $this->db->join('taskassign_master','taskassigntask_master.fktaskassignId  = taskassign_master.taskassignId','left');
      //  $this->db->join('tasktype_master','taskassigntask_master.fkcheck = tasktype_master.tasktypeid','left');

      // join for update the tasktypename
       $this->db->join('tasktype_master','taskassigntask_master.fktasktype = tasktype_master.tasktypeid','left');

 			$this->db->from('taskassigntask_master');
			$this->db->where_in('taskassigntask_master.fktaskassignId',$fktaskassignId);
 			$this->db->where('taskassigntask_master.is_active',1);
			$query = $this->db->get();
			return $query->result();

 		 }


    //  this code to update the tasktype name in table
      public function gettasknamedata($fktaskassignId) 
		{
 			 $this->db->select('tasktype_master.tasktypename,tasktype_master.tasktypeid');

       $this->db->join('taskassign_master','taskassigntask_master.fktaskassignId  = taskassign_master.taskassignId','left');
      
       $this->db->join('tasktype_master','taskassigntask_master.fktasktype = tasktype_master.tasktypeid','left');

      $this->db->from('taskassigntask_master');

			$this->db->where_in('taskassigntask_master.fktaskassignId',$fktaskassignId);

 			$this->db->where('taskassign_master.is_active',1);
      
       $this->db->where('taskassigntask_master.is_active',1);
      //  for selected
       $this->db->group_by('tasktype_master.tasktypeid');
			$query = $this->db->get();
			return $query->result();
 		 }


// table data in tasktype
    //   public function getalltasktypeintable()
    // {      
     
    //   // SELECT *
    //   // FROM taskassigntask_master
    //   // INNER JOIN tasktype_master
    //   // ON taskassigntask_master.fktasktype = tasktype_master.tasktypeid;


    //   // SELECT * FROM taskassigntask_master 
    //   // INNER JOIN tasktype_master ON 
    //   // taskassigntask_master.fktasktype=tasktype_master.tasktypeid;

    //   $this->db->select('taskassigntask_master.*');

    //   $this->db->join('tasktype_master','taskassigntask_master.fktasktype = tasktype_master.tasktypeid','left');
    //    $this->db->from('taskassigntask_master');
    //    $this->db->where('taskassigntask_master.is_active','1');
    //   //  $this->db->order_by("student_master.id", "desc"); 
    //     $query = $this->db->get();
    //     return $query->result();     
    // }





}
?>
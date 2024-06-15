<?php
  class Grouptype_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }



    //   public function getgroupmodify()
    //   {      

    //     $this->db->select('grouptype_master.*,');
    //     $this->db->from('grouptype_master');
    //     $this->db->where('grouptype_master.is_active','1'); 
    //      $query = $this->db->get();
    //      return $query->result();


        
    // }


// dropdown fetch for country


public function getallProject()

{      
 
        $this->db->select('project_master.*,type_master.typeName');
        $this->db->join('type_master','project_master.fkprojectTypenameId = type_master.typeId','left');  
        $this->db->from('project_master');
        $this->db->where('project_master.is_active','1');
       //  $this->db->order_by("student_master.id", "desc"); 
         $query = $this->db->get();
         return $query->result();
        
}


public function getgroupmodify()
{      

  $this->db->select('taskassign_master.*,');
  $this->db->from('taskassign_master');
  $this->db->where('taskassign_master.is_active','1'); 
   $query = $this->db->get();
   return $query->result();

}


      public function getgroup()
      {      

        // $this->db->select('taskassign_master.*,');
        // $this->db->from('taskassign_master');
        // $this->db->where('taskassign_master.is_active','1'); 
        //  $query = $this->db->get();
        //  return $query->result();

        $this->db->select('taskassign_master.*,group_master.groupname');
        $this->db->join('group_master','taskassign_master.taskassignId = group_master.groupid','left');  
        $this->db->from('taskassign_master');
        $this->db->where('taskassign_master.is_active','1');
       //  $this->db->order_by("student_master.id", "desc"); 
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
         $query = $this->db->get();
         return $query->result();
        
      
    }


// dropdown for select user
    // public function getselectuser()
    //   {      
    //     $this->db->select('registration_master.registrationId,registration_master.fname');
    //     $this->db->from('registration_master');
    //     $this->db->where('registration_master.is_active','1');
    //     // $this->db->where('registration_master.fkgroupid','1');
    //      $query = $this->db->get();
    //      return $query->result();
        
    // }



    // public function getselectuser($groupid)
    //   {   
    //     // $this->db->where_in('group_id',$groupid);
    //     //  $query = $this->db->get('group_master')->result_array();
    //     //  echo $this->db->last_query();
    //     // return  $query;
    //     $this->db->select('*');
    //     $this->db->from('registration_master');
    //     $this->db->where('registration_master.is_active','1');
    //     $this->db->where_in('registration_master.fkgroupid',$groupid);
    //      $query = $this->db->get();
    //      return $query->result();
        
      
    // }

    // public function getStatesOfAcountry($country_id)
    // {
    //     $this->db->where('country_id',$country_id);
    //     $states = $this->db->get('states')->result_array();

    //     // echo $this->db->last_query();
    //     return $states;
    // }


    //dropdown fetch function for task type
    
    public function getselectTask()
      {      
        $this->db->select('tasktype_master.tasktypeid,tasktype_master.tasktypename');
        $this->db->from('tasktype_master');
        $this->db->where('tasktype_master.is_active','1');
         $query = $this->db->get();
         return $query->result();
        
    }



    //  public function getallProject()

    //  {      
      
    //          $this->db->select('project_master.*,type_master.typeName');
    //          $this->db->join('type_master','project_master.fkprojectTypenameId = type_master.typeId','left');  
    //          $this->db->from('project_master');
    //          $this->db->where('project_master.is_active','1');
    //         //  $this->db->order_by("student_master.id", "desc"); 
    //           $query = $this->db->get();
    //           return $query->result();
             
    //  }


  
    //    get all registration

    public function getallUsers()
    {      
     
            $this->db->select('registration_master.*');

           //  $this->db->join('country_master','project_master.fkcountry = country_master.countryId','left');
            $this->db->from('registration_master');
            $this->db->where('registration_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }

    public function gettaskbyID($taskid)
    {
          $this->db->select('task_master.taskname,task_master.taskId');
            $this->db->from('task_master');

            $this->db->where('task_master.is_active','1');
            $this->db->where_in('task_master.tasktype',$taskid);
         
           

             $query = $this->db->get();
             return $query->result();
         
    }


    // task assign form save query
    
    

                //     for update groupname

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



    //   venues data by  id
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





}
?>
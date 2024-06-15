<?php
  class Taskmanagement_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }
  
     public function getalltask()
     {      
      
             $this->db->select('task_master.*');

            //  $this->db->join('country_master','task_master.fkcountry  = country_master.countryId','left');
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     
    //    Edit 
     public function getallSongByid($taskId)
     {  

        // $this->db->select('task_master.*,TIME_FORMAT
        // (task_master.duration,"%H:%i" ) as duration');

        $this->db->select('task_master.*');
       $this->db->from('task_master');
       $this->db->where('task_master.taskId',$taskId);
       $this->db->where('task_master.is_active','1');
       $query = $this->db->get();
       return $query->result();
   
     }


    //    get all registration


    // group type master dropdown fetch
    public function getalltask2()
    {      
   
            $this->db->select('task_master.*,group_master.groupName');
            $this->db->join('group_master','task_master.fktaskTypenameId1 = group_master.groupId','left');  
            $this->db->from('task_master');
            $this->db->where('task_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }
    

    public function getalltaskType2()
    {      
     
            $this->db->select('group_master.groupId,group_master.groupName'); 
            $this->db->from('group_master');
            $this->db->where('group_master.is_active','1');
             $query = $this->db->get();
             return $query->result();
            
    }

    // end group type master

    public function getalltask3()
     {      
    
             $this->db->select('task_master.*,type_master.typeName');

             $this->db->join('type_master','task_master.fktaskTypenameId2 = type_master.typeId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType3()
     {      
      
             $this->db->select('type_master.typeId,type_master.typeName'); 
             $this->db->from('type_master');
             $this->db->where('type_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltask4()
     {      
    
             $this->db->select('task_master.*,tasklist_master.tasklistname');

             $this->db->join('tasklist_master','task_master.fktaskTypenameId3 = tasklist_master.tasklistId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType4()
     {      
      
             $this->db->select('tasklist_master.tasklistId,tasklist_master.tasklistname'); 
             $this->db->from('tasklist_master');
             $this->db->where('tasklist_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltask5()
     {      
    
             $this->db->select('task_master.*,workhour_master.workhourname');

             $this->db->join('workhour_master','task_master.fktaskTypenameId4 = workhour_master.workhourId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType5()
     {      
      
             $this->db->select('workhour_master.workhourId,workhour_master.workhourname'); 
             $this->db->from('workhour_master');
             $this->db->where('workhour_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltask6()
     {      
    
             $this->db->select('task_master.*,reminder_master.remindername');

             $this->db->join('reminder_master','task_master.fktaskTypenameId5 = reminder_master.reminderId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType6()
     {      
      
             $this->db->select('reminder_master.reminderId,reminder_master.remindername'); 
             $this->db->from('reminder_master');
             $this->db->where('reminder_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltask7()
     {      
    
             $this->db->select('task_master.*,priority_master.priorityname');

             $this->db->join('priority_master','task_master.fktaskTypenameId6 = priority_master.priorityId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType7()
     {      
      
             $this->db->select('priority_master.priorityId,priority_master.priorityname'); 
             $this->db->from('priority_master');
             $this->db->where('priority_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }


     public function getalltask8()
     {      
    
             $this->db->select('task_master.*,billing_master.billingtName');

             $this->db->join('billing_master','task_master.fktaskTypenameId7 = billing_master.billingtId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType8()
     {      
      
             $this->db->select('billing_master.billingtId,billing_master.billingtName'); 
             $this->db->from('billing_master');
             $this->db->where('billing_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltask9()
     {      
    
             $this->db->select('task_master.*,status_master.statusname');

             $this->db->join('status_master','task_master.fktaskTypenameId8 = status_master.statusId','left');  
             $this->db->from('task_master');
             $this->db->where('task_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getalltaskType9()
     {      
      
             $this->db->select('status_master.statusId,status_master.statusname'); 
             $this->db->from('status_master');
             $this->db->where('status_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

  

   

    public function getallUsers()
    {      
     
            $this->db->select('registration_master.*');

           //  $this->db->join('country_master','task_master.fkcountry  = country_master.countryId','left');
            $this->db->from('registration_master');
            $this->db->where('registration_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }


//     from project master get project name fill by project view
    public function getProjectName(){
        $this->db->select('project_master.projectId,project_master.projectName'); 
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
    }


    public function getTasktype()
    {      
      $this->db->select('tasktype_master.tasktypeid,tasktype_master.tasktypename');
      $this->db->from('tasktype_master');
      $this->db->where('tasktype_master.is_active','1');
       $query = $this->db->get();
       return $query->result();
      
  }
}
?>
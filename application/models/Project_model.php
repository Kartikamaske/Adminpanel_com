<?php
  class Project_model extends CI_Model {
    
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

      
     public function getallProject()

     {      
      
             $this->db->select('project_master.*,type_master.typeName');
             $this->db->join('type_master','project_master.fkprojectTypenameId = type_master.typeId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
             $this->db->order_by("project_master.projectId", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }


     public function getallProjectType()
     {      
      
             $this->db->select('type_master.typeId,type_master.typeName'); 
             $this->db->from('type_master');
             $this->db->where('type_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

    //  client master
     public function getallProject2()
     {      
    
             $this->db->select('project_master.*,client_master.clientName');
             $this->db->join('client_master','project_master.fkprojectTypenameId2 = client_master.clientId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProjectType2()
     {      
      
             $this->db->select('client_master.clientId,client_master.clientName'); 
             $this->db->from('client_master');
             $this->db->where('client_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     //client master end

     //typelayout master
     public function getallProject3()
     {      
    
             $this->db->select('project_master.*,tasklayout_master.tasklayoutName');
             $this->db->join('tasklayout_master','project_master.fkprojectTypenameId3 = tasklayout_master.tasklayoutId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
            //  $this->db->order_by("student_master.id","desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProjectType3()
     {      
      
             $this->db->select('tasklayout_master.tasklayoutId,tasklayout_master.tasklayoutName'); 
             $this->db->from('tasklayout_master');
             $this->db->where('tasklayout_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     //end layout master


     public function getallProject4()
     {      
    
             $this->db->select('project_master.*,grouptype_master.groupName');
             $this->db->join('grouptype_master','project_master.fkprojectTypenameId4 = grouptype_master.groupId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
            //  $this->db->order_by("student_master.id","desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProjectType4()
     {      
      
             $this->db->select('grouptype_master.groupId,grouptype_master.groupName'); 
             $this->db->from('grouptype_master');
             $this->db->where('grouptype_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }


     public function getallProject5()
     {      
    
             $this->db->select('project_master.*,accesstype_master.accessName');
             $this->db->join('accesstype_master','project_master.fkprojectTypenameId5 = accesstype_master.accessId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
            //  $this->db->order_by("student_master.id","desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProjectType5()
     {      
      
             $this->db->select('accesstype_master.accessId,accesstype_master.accessName'); 
             $this->db->from('accesstype_master');
             $this->db->where('accesstype_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProject6()
     {      
    
             $this->db->select('project_master.*,budget_master.budgetName');
             $this->db->join('budget_master','project_master.fkprojectTypenameId6 = budget_master.budgetId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
            //  $this->db->order_by("student_master.id","desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProjectType6()
     {      
      
             $this->db->select('budget_master.budgetId,budget_master.budgetName'); 
             $this->db->from('budget_master');
             $this->db->where('budget_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }


     public function getallProject7()
     {      
    
             $this->db->select('project_master.*,currenttype_master.currentName');
             $this->db->join('currenttype_master','project_master.fkprojectTypenameId7 = currenttype_master.currentId','left');  
             $this->db->from('project_master');
             $this->db->where('project_master.is_active','1');
            //  $this->db->order_by("student_master.id","desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

     public function getallProjectType7()
     {      
      
             $this->db->select('currenttype_master.currentId,currenttype_master.currentName'); 
             $this->db->from('currenttype_master');
             $this->db->where('currenttype_master.is_active','1');
              $query = $this->db->get();
              return $query->result();
             
     }


//      tagmain_master dropdwon fetch start

public function getalltag8()
{      

        // $this->db->select('project_master.*,tagmain_master.tagmainname');

        $this->db->select('tagmain_master.*,');
        // $this->db->join('tagmain_master','tag_master.fktagId = tagmain_master.tagmainId','left'); 
        $this->db->from('tagmain_master');
        $this->db->where('tagmain_master.is_active','1');

       //  $this->db->order_by("student_master.id", "desc"); 
         $query = $this->db->get();
         return $query->result();
        
}


//   gettagsdata data by  id
public function gettagsdata($fkprojectId) 
{

          $this->db->select('tag_master.fkprojectId,tag_master.fktagId,tagmain_master.tagmainname');
          $this->db->join('project_master','tag_master.fkprojectId  = project_master.projectId','left');
         $this->db->join('tagmain_master','tag_master.fktagId  = tagmain_master.tagmainId','left');

         $this->db->from('tag_master');
        $this->db->where_in('tag_master.fkprojectId',$fkprojectId);
         $this->db->where('tag_master.is_active',1);
        $query = $this->db->get();
        return $query->result();

  }

  //vvvv

public function getalltagsType8()
{      
 
        $this->db->select('tagmain_master.tagmainId,tagmain_master.tagmainname'); 
        $this->db->from('tagmain_master');
        $this->db->where('tagmain_master.is_active','1');
         $query = $this->db->get();
         return $query->result();
        
}

// end



    //    Edit 
     public function getallProjectByid($projectId)
     {   
       $this->db->select('project_master.*,type_master.typeName');
       $this->db->join('type_master','project_master.fkprojectTypenameId = type_master.typeId','left'); 
       $this->db->from('project_master');
       $this->db->where('project_master.projectId',$projectId);
       $this->db->where('project_master.is_active','1');
       $query = $this->db->get();
       return $query->result();
   
     }


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
    

                //     for update tags

    function deleteRecord($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->delete($tableName);
        return $this->db->affected_rows();
    }

}
?>
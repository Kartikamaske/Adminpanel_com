<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grouptype extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Grouptype_model');
        
    }
	
	
	public function index()

	{

		// $this->load->model('Common_model');


		$countries = $this->Grouptype_model->getgroup();

		
       

        // echo "<pre>";
        // print_r($countries);
	
		$this->load->view('common/header_view');
		$this->load->view('Grouptype/grouptype_view');
		$this->load->view('common/footer_view');
	}

    public function create()
	{
		$data['TTtype']=$this->Grouptype_model->getgroup();

		$data['Stype']=$this->Grouptype_model->getallUsers();

		$data['STtype']=$this->Grouptype_model->getselectTask();

       			//  echo "<pre>";
        		// print_r($data['Stype']);

		$this->load->view('common/header_view');
		$this->load->view('Grouptype/grouptype_view',$data);        //new data fetch
		$this->load->view('common/footer_view');

	}


	// public function state()
    // {
    //     $country_id = $this->input->post('country_id');
    //     $this->load->model('Common_model');
    //     $states = $this->Common_model->getStatesOfAcountry($country_id);
    //     // print_r($states);

    //     $data = [];
    //     $data['states'] = $states;
    //    $statesString = $this->load->view('states_select',$data,true); 
       
    //     //this view will not load....... it will retrun as string
    //     $response['states'] = $statesString;
    //     echo json_encode($response);
    // }


	public function selectuser()
    {
        $grouptypeid = $this->input->post('grouptypeid');

        

        $usertype = $this->Grouptype_model->getselectuser($grouptypeid);
        // print_r($usertype);

       
        echo json_encode($usertype);

    }
	

	function insertProject(){

		$taskassignId= $this->input->post('taskassignId'); 
		$fkgroupId=$this->input->post('grouptypeid');
		$fkuserId=$this->input->post('selectuserid');

		// $fkselecttaskId=$this->input->post('tasktypeid');

		$fksrno=$this->input->post('sr_no');
		$fktasklist=$this->input->post('task_list');
		$fkcheck=$this->input->post('checktask');

		// $sr_no=$this->input->post('sr_no');
		// $task_list=$this->input->post('task_list');


		

	   
		  $fields=array(

			             'taskassignId'=>$taskassignId,
						
						
					
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);

			echo json_encode($fields);

			// $this->db->insert('grouptype_master',$fields);  

		 $getid = $this->Commonmodel->insertRecord("taskassign_master",$fields);


		 
		 if(!empty($fkgroupId))
		 { 

		   for($i=0;$i<count($fkgroupId);$i++)
		   { 
			   $insertkeys=array(
			   'fktaskassignId'=>$getid,
			   'fkgroupId'=>$fkgroupId[$i],
				 'created_by'=>1
 
						);
			  
			   

		   $this->Commonmodel->insertRecord("taskassigngroup_master",$insertkeys);
		   
			}
		  }
		  

		  if(!empty($fkuserId))
		 { 

		   for($i=0;$i<count($fkuserId);$i++)
		   { 
			   $insertkeys=array(
			   'fktaskassignId'=>$getid,
			   'fkuserId'=>$fkuserId[$i],
				 'created_by'=>1
 
						);
			  
			   

		   $this->Commonmodel->insertRecord("taskassignuser_master",$insertkeys);
		   
			}
		  }

		//   if(!empty($fksrno))
		//  { 

		//    for($i=0;$i<count($fksrno);$i++)
		//    { 
		// 	   $taskkeys=array(
		// 	   'fktaskassignId'=>$getid,
			
		// 	//    'fkcheck'=>$fkcheck[$i],
		// 	//    'fksrno'=>$fksrno[$i],
		// 	//    'fktasklist'=>$fktasklist[$i],
			   
		// 		 'created_by'=>1
 
		// 				);
			  
			   

		//    $this->Commonmodel->insertRecord("taskassigntask_master",$taskkeys);
		   
		// 	}
		//   }

	
	
	  } 
   
   
	  public function update()

	  {

		  $data['dataa']=$this->Grouptype_model->getallProjectByid($this->uri->segment(3));

		//  $data['country']=$this->grouptype_master->getCountry();

		// $data['tagsdata']=$this->Grouptype_model->gettagsdata($this->uri->segment(3));

		// echo "<pre>";
		// print_r($data);

		
		// $data['Ptype']=$this->Grouptype_model->getallProjectType();



		$this->load->view('common/header_view');
		$this->load->view('Grouptype/grouptype_view',$data);
		$this->load->view('common/footer_view');

	  }
   

	  public function updateProject()
	  {
		$groupName= $this->input->post('groupName'); 

	
		//  $secmobileNo= $this->input->post('secmobileNo'); 
		//  $maild= $this->input->post('maild');
		 

		
		$groupId= $this->input->post('groupId'); 


			$fields=array(
				
			            'groupId'=>$groupId,
			            'groupName'=>$groupName,
						 
						 
						
			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );

		   echo "<pre>";
		   print_r($fields);
		  $whereArray=array('groupId'=>$groupId);

          $this->Commonmodel->updateRecord("grouptype_master",$fields,$whereArray);

	
		//   $groupIdd=0;
	
		//   $groupIdd= $this->Commonmodel->updateRecord("grouptype_master",$fields,$whereArray);
		   
		//    tag master update
		


			// $recipeIdd= $this->Commonmodel->updateRecord("recipe_master",$fields,$whereArray);

			 
			//  if($groupIdd>0)
			//  { 
			// 	$whereArray=array('fkgroupId'=>$groupId);
		    // 	$this->Grouptype_model->deleteRecord('tag_master',$whereArray);

			// 	if(!empty($fktagId))
			// 	{ 

			// 	  for($i=0;$i<count($fktagId);$i++)
			// 	  { 
			// 		  $insertkeys=array(
			// 		  'fkgroupId'=>$groupId,
			// 		  'fktagId'=>$fktagId[$i],
			// 			'created_by'=>1
				
			// 		 );
				
			// 	  $this->Commonmodel->insertRecord("tag_master",$insertkeys);
				  
			// 	   }
			// 	 }
			// 	}


			

		   

	  }


	  public function gettaskbyID()

			{
					$taskid=$this->input->post('taskid');

					
				

				//    echo $taskshowtableid;


					$data=$this->Grouptype_model->gettaskbyID($taskid);
					echo json_encode($data);
					// print_r($data);
			
			
			}

	 }
		  
		


		
	   
	
	

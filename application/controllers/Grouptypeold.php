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

		// $data['data']=$this->Grouptype_model->getgroupmodify();

		// $this->load->model('Common_model');


		// $countries = $this->Grouptype_model->();

		$data['data']=$this->Grouptype_model->getgroupmodify();

		
       

        // echo "<pre>";
        // print_r($countries);
	
		$this->load->view('common/header_view');
		$this->load->view('Grouptype/modifyGrouptype',$data);
		$this->load->view('common/footer_view');
	}

    public function create()
	{

		$data['TTtype']=$this->Grouptype_model->getgroup();

		$data['Stype']=$this->Grouptype_model->getallUsers();

		$data['STtype']=$this->Grouptype_model->getselectTask();

		$data['STTtype']=$this->Grouptype_model->gettaskassignsub();

       			// 	 echo "<pre>";
				// 	print_r($data);
        		// // print_r($data['STTtype']);

		$this->load->view('common/header_view');
		$this->load->view('Grouptype/grouptype_view',$data);        //new data fetch
	
		$this->load->view('common/footer_view');


	}


	public function selectuser()
    {
        $grouptypeid = $this->input->post('grouptypeid');

        $usertype = $this->Grouptype_model->getselectuser($grouptypeid);
        // print_r($usertype);

        echo json_encode($usertype);

    }
	

	 public function insertProject(){

		$taskassignId= $this->input->post('taskassignId'); 
		$fkgroupId=$this->input->post('grouptypeid');
		$fkuserId=$this->input->post('selectuserid');

		// $fkselecttaskId=$this->input->post('tasktypeid');

		$fktaskID=$this->input->post('fktaskID');
		$fktasklist=$this->input->post('task_list');
		$fktasktype=$this->input->post('task_type');
		$fkcheck=$this->input->post('checktask');

		// $sr_no=$this->input->post('sr_no');
		// $task_list=$this->input->post('task_list');

		print_r($fktasklist);
		

	   
		  $fields=array(

			             'taskassignId'=>$taskassignId,
						 'created_date'=>date('Y-m-d H:i:s'),

			 			'created_by'=>1);

			// $this->db->insert('grouptype_master',$fields);  

		 $getid = $this->Commonmodel->insertRecord("taskassign_master",$fields);
		//  echo json_encode($getid);

			if($getid>0){

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


		//   for update the table 
		  if(!empty($fktasktype))
		  { 
 
			for($i=0;$i<count($fktasktype);$i++)
			{ 
				$insertkeys=array(
				'fktaskassignId'=>$getid,
			 //    'fkselecttaskId'=>$fkselecttaskId[$i],
					 // 'fkselecttaskId'=>$sr_no[$i],
 
				'fkcheck'=>$fkcheck[$i],
				'fktaskID'=>$fktaskID[$i],
				'fktasklist'=>$fktasklist[$i],
				'fktasktype'=>$fktasktype[$i],
				'fkuserId'=>$fkuserId[$i],

				'created_by'=>1
  
						 );
			   
				
					    // echo "<pre>";
					    //  print_r($task_type);
					
 
			$this->Commonmodel->insertRecord("taskassigntask_master",$insertkeys);
			
			 }
		   }



		//    new create

		   if(!empty($fkuserId))
		   { 
  
			 for($i=0;$i<count($fkuserId);$i++)
			 { 
				 $insertkeys=array(

				 'fktaskassignId'=>$getid,

			  //    'fkselecttaskId'=>$fkselecttaskId[$i],
					  // 'fkselecttaskId'=>$sr_no[$i],
  
				//  'fkcheck'=>$fkcheck[$i],
				//  'fktaskID'=>$fktaskID[$i],
				//  'fktasklist'=>$fktasklist[$i],
				//  'fktasktype'=>$fktasktype[$i],


				'fkuserId'=>$fkuserId[$i],

				 'fktaskID'=>$fktaskID[$i],
				 
				 'created_by'=>1
   
						  );
				
				 
						 // echo "<pre>";
						 //  print_r($task_type);
					 
  
			 $this->Commonmodel->insertRecord("taskassignsub_master",$insertkeys);
			 
			  }
			}
			}
	
	  } 
   
   
	  public function update()

	//   this function is used for terms goes for edit means update

	  {
		$data['taskassignId']=$this->uri->segment(3);

		// for update group name
		  $data['dataa']=$this->Grouptype_model->getgroupdata($this->uri->segment(3));

		  $data['dataaa']=$this->Grouptype_model->getselectuserdata($this->uri->segment(3));

		  $data['itemsa']=$this->Grouptype_model->gettaskdata($this->uri->segment(3));
		
		// for save and update tasktypename means dropdown of tasktype featch in table
		  $data['tasktypeName']=$this->Grouptype_model->gettasknamedata($this->uri->segment(3));
		

		// dropdowm code for group name
		$data['TTtype']=$this->Grouptype_model->getgroup();

		// dropdown code for selectuser
		$data['Stype']=$this->Grouptype_model->getallUsers();


		// dropdown code for table show

		$data['STtype']=$this->Grouptype_model->getselectTask();


		// echo "<pre>";
		// print_r($data['tasktypeName']);

	

		$this->load->view('common/header_view');
		$this->load->view('Grouptype/grouptype_view',$data);
		
		$this->load->view('common/footer_view');


	  }
   

	  public function updateProject()

	//   this function used for show the record

	  {

		$fkgroupId= $this->input->post('grouptypeid'); 
		$selectuserid= $this->input->post('selectuserid'); 
		$tasktypeid= $this->input->post('tasktypeid'); 
		$taskassignId= $this->input->post('taskassignId'); 

		$fkuserId=$this->input->post('selectuserid');

		// $fkselecttaskId=$this->input->post('tasktypeid');

		$fktaskID=$this->input->post('fktaskID');
		$fktasklist=$this->input->post('task_list');
		$fktasktype=$this->input->post('task_type');

		$fkcheck=$this->input->post('checktask');
			
		$fields=array(
				
			            'taskassignId'=>$taskassignId,
			           


			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );

		   echo "main";
		   print_r($fields);

		  $whereArray=array('taskassignId'=>$taskassignId);

		  $this->Commonmodel->updateRecord("taskassign_master",$fields,$whereArray);


		  if($taskassignId > 0)
		  { 
			

			$taskgroup1=array(
				
				'fktaskassignId'=>$taskassignId,
				'is_active'=>0,
				'modified_date'=>date('Y-m-d H:i:s'),
				'modified_by'=>1,
   				);


  $whereArray1=array('fktaskassignId'=>$taskassignId);

  $this->Commonmodel->updateRecord("taskassigngroup_master",$taskgroup1,$whereArray1);


  $taskgroup2=array(
				
	'fktaskassignId'=>$taskassignId,
	'is_active'=>0,
	'modified_date'=>date('Y-m-d H:i:s'),
	'modified_by'=>1,
	   );


$whereArray2=array('fktaskassignId'=>$taskassignId);

$this->Commonmodel->updateRecord("taskassignuser_master",$taskgroup2,$whereArray2);

$taskgroup3=array(
				
	'fktaskassignId'=>$taskassignId,
	'is_active'=>0,
	'modified_date'=>date('Y-m-d H:i:s'),
	'modified_by'=>1,
	   );


$whereArray3=array('fktaskassignId'=>$taskassignId);

$this->Commonmodel->updateRecord("taskassigntask_master",$taskgroup3,$whereArray3);



// for group name update
  if(!empty($fkgroupId))
				{ 
	   
				  for($i=0;$i<count($fkgroupId);$i++)
				  { 
					  $insertkeys=array(
					  'fktaskassignId'=>$taskassignId,
					  'fkgroupId'=>$fkgroupId[$i],
						'created_by'=>1
		
							   );
					 
					  
							   echo "second";
							   print_r($insertkeys);
				  $this->Commonmodel->insertRecord("taskassigngroup_master",$insertkeys);
				  
				   }
				 }

				//  for select user update
				 if(!empty($fkuserId))
		 { 

		   for($i=0;$i<count($fkuserId);$i++)
		   { 
			   $insertkeys1=array(
			   'fktaskassignId'=>$taskassignId,
			   'fkuserId'=>$fkuserId[$i],
				 'created_by'=>1
 
						);
			  
						echo "third";
						print_r($insertkeys1);

		   $this->Commonmodel->insertRecord("taskassignuser_master",$insertkeys1);
		   
			}
		  }


		//   for update the table means tasktype master data
		  if(!empty($fkcheck))
		  { 
 
			for($i=0;$i<count($fkcheck);$i++)
			{ 
				$insertkeys2=array(
				'fktaskassignId'=>$taskassignId,
			 //    'fkselecttaskId'=>$fkselecttaskId[$i],
					 // 'fkselecttaskId'=>$sr_no[$i],
 
				'fkcheck'=>$fkcheck[$i],
				'fktaskID'=>$fktaskID[$i],
				'fktasklist'=>$fktasklist[$i],
				'fktasktype'=>$fktasktype[$i],
				
				  'created_by'=>1
  
						 );
			   
				
						 echo "Fourth";
						 print_r($insertkeys2);
					
 
			$this->Commonmodel->insertRecord("taskassigntask_master",$insertkeys2);
			
			 }
		   }
			
			

			 }

	
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
		  
		


		
	   
	
	

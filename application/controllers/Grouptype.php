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
		$data['AddedGroup']=$this->Grouptype_model->getGroupByUserAdded();
        $data['userByLogin']=$this->Grouptype_model->getUserByLogin();

       

        // echo "<pre>";
        // print_r($countries);
	
		$this->load->view('common/header_view',$data);
		$this->load->view('GroupType/modifyGrouptype',$data);
		$this->load->view('common/footer_view');
	}

    public function create()
	{

		$data['TTtype']=$this->Grouptype_model->getgroup();

		$data['Stype']=$this->Grouptype_model->getallUsers();

		$data['STtype']=$this->Grouptype_model->getselectTask();

		$data['STTtype']=$this->Grouptype_model->gettaskassignsub();

		$data['AddedGroup']=$this->Grouptype_model->getGroupByUserAdded();

		$data['userByLogin']=$this->Grouptype_model->getUserByLogin();
		$data['getgroup']=$this->Grouptype_model->getdataWhenLeaderlogin();

       			// 	 echo "<pre>";
				// 	print_r($data);
        		// // print_r($data['STTtype']);

		$this->load->view('common/header_view',$data);
		$this->load->view('GroupType/grouptype_view',$data);        //new data fetch
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

		// print_r($fktasklist);
	   
		  $fields=array(

			             'taskassignId'=>$taskassignId,
						 'created_date'=>date('Y-m-d H:i:s'),

			 			'created_by'=>1);


		 $getid = $this->Commonmodel->insertRecord("taskassign_master",$fields);
		

			if($getid>0){


		   if(!empty($fkuserId))
		   { 
			
			 for($i=0;$i<count($fkuserId);$i++)
			 { 

				for ($j=0; $j <count($fktaskID) ; $j++) { 
					if($fkcheck[$j]==1){
						$insertkeys=array(

							'fktaskassignId'=>$getid,
							   'fkuserId'=>$fkuserId[$i],
		   
							'fktaskID'=>$fktaskID[$j],
		   
		   
							// 'currentdate'=>date('Y-m-d H:i:s'),
		   
							'created_date'=>date('Y-m-d H:i:s'),
							
							'created_by'=>1
			  
									 );
						   
							
			 
						$this->Commonmodel->insertRecord("taskassignsub_master",$insertkeys);
					}
					
				}

			  }
			}
			}
	
	  } 
   
   
	  public function update()
	  {
		$data['taskassignId']=$this->uri->segment(3);

		// for update group name
		  $data['dataa']=$this->Grouptype_model->getgroupdata($this->uri->segment(3));
		  $data['userByLogin']=$this->Grouptype_model->getUserByLogin();

		// user information
		//   $data['dataaa']=$this->Grouptype_model->getselectuserdata($this->uri->segment(3));

		//   $data['itemsa']=$this->Grouptype_model->gettaskdata($this->uri->segment(3));
		
		// for save and update tasktypename means dropdown of tasktype featch in table
		//   $data['tasktypeName']=$this->Grouptype_model->gettasknamedata($this->uri->segment(3));
		

		// dropdowm code for group name
		// $data['TTtype']=$this->Grouptype_model->getgroup();

		// dropdown code for selectuser
		// $data['Stype']=$this->Grouptype_model->getallUsers();


		// dropdown code for table show

		// $data['STtype']=$this->Grouptype_model->getselectTask();


		// echo "<pre>";
        // print_r($data);
		// print_r($data['dataa']);

	

		$this->load->view('common/header_view');
		$this->load->view('GroupType/grouptype_view',$data);
		$this->load->view('common/footer_view');


	  }
   

	  public function updategroup()

	//   this function used for show the record

	  {

		$fkgroupId= $this->input->post('grouptypeid'); 
		$selectuserid= $this->input->post('selectuserid'); 
		$tasktypeid= $this->input->post('tasktypeid'); 
		$taskassignId= $this->input->post('taskassignId'); 
		$fkuserId=$this->input->post('selectuserid');
		$fktasklist=$this->input->post('task_list');
		$fktasktype=$this->input->post('task_type');
		$taskassignsubId =$this->input->post('taskassignsubId');
		$fktaskassignId =$this->input->post('fktaskassignId');
        $fkuserId =$this->input->post('fkuserId');
        $fktaskID =$this->input->post('fktaskID');
        $processflag =$this->input->post('processflag');
        $description =$this->input->post('description');
        $expectedtime =$this->input->post('expectedtime');


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

  $this->Commonmodel->updateRecord("taskassignsub_master",$taskgroup1,$whereArray1);


		//   for update the table means tasktype master data
		  if(!empty($fkuserId))
		  { 
 
			for($i=0;$i<count($fkuserId);$i++)
			{ 
				$insertkeys2=array(
					
				'fktaskassignId'=>$taskassignId,
				'fkuserId'=>$fkuserId[$i],
				'fktaskID'=>$fktaskID[$i],
				// 'fktasklist'=>$fktasklist[$i],
				// 'fktasktype'=>$fktasktype[$i],
				
				  'created_by'=>1

						 );
			   
						 echo "Fourth";
						 print_r($insertkeys2);
					
 
			$this->Commonmodel->insertRecord("taskassignsub_master",$insertkeys2);
			
			 }
		   }
			
			

			 }

	
	  }


	  public function gettaskbyID()

			{
					$taskid=$this->input->post('taskid');
					$data=$this->Grouptype_model->gettaskbyID($taskid);
					echo json_encode($data);
					// print_r($data);
			
			
			}

	 }
		  
		


		
	   
	
	

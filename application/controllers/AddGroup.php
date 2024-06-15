<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddGroup extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('AddGroup_model');
        
    }
	
	public function index()
	{
        $data['data']=$this->AddGroup_model->getallGroup();
        $data['userByLogin']=$this->AddGroup_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('AddGroup/addGroupDetail_view',$data);
		$this->load->view('common/footer_view');
	}
    public function create()
	{
        $data['user']=$this->AddGroup_model->getallUsersName();
        $data['leader']=$this->AddGroup_model->getallLeadersName();
        $data['userByLogin']=$this->AddGroup_model->getUserByLogin();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('AddGroup/addGroup_view',$data);
		$this->load->view('common/footer_view');
	}
	
	function insertGroup(){
		$groupname= $this->input->post('groupname'); 
		$grouplink=$this->input->post('grouplink');
		$fkregisteruserid=$this->input->post('allgroupuser[]');
		$fkregisterleaderid=$this->input->post('allgroupleader[]');

		  $fields=array(
			            'groupname'=>$groupname,
						'grouplink'=>$grouplink,


						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);
		// $this->Commonmodel->insertRecord("group_master",$fields);

			$getgroup=$this->Commonmodel->insertRecord("group_master",$fields);
			if(!empty($fkregisteruserid))
			{ 

			  for($i=0;$i<count($fkregisteruserid);$i++)
			  { 
				  $insertkeys=array(
				  'fkgroupid'=>$getgroup,
				  'fkregisterid'=>$fkregisteruserid[$i],
					'created_by'=>1,
	
						   );
			  $this->Commonmodel->insertRecord("groupuser_master",$insertkeys);
			  
			   }
			 }
			 if(!empty($fkregisterleaderid))
			{ 
			  for($i=0;$i<count($fkregisterleaderid);$i++)
			  { 
				  $insertkeys=array(
				  'fkgroupid'=>$getgroup,
				  'fkregisterid'=>$fkregisterleaderid[$i],
					'created_by'=>1,
	
						   );
			  $this->Commonmodel->insertRecord("groupleader_master",$insertkeys);
			  
			   }
			 }
	  } 
	
	  public function update()
	  {
		$data['dataa']=$this->AddGroup_model->getallGroupById($this->uri->segment(3));
		$data['user']=$this->AddGroup_model->getallUsersName();
		$data['leader']=$this->AddGroup_model->getallLeadersName();
		// $data['groupuser']=$this->AddGroup_model->getallGroupUser($this->uri->segment(3));
		// $data['addeduser']=$this->AddGroup_model->getallAddedUsers($this->uri->segment(3));
		// $data['addedleader']=$this->AddGroup_model->getallAddedLeader($this->uri->segment(3));
		$data['alladdeduser']=$this->AddGroup_model->getAddedUserWithAllUsers($this->uri->segment(3));
		$data['alladdedleader']=$this->AddGroup_model->getAddedLeaderWithAllUsers($this->uri->segment(3));


			// echo "<pre>";
			// print_r($data["alladdedleader"]);
	
			$this->load->view('common/header_view');
			$this->load->view('AddGroup/addGroup_view',$data);
			$this->load->view('common/footer_view');
	  }

	  
	public function updateGroup(){
			 
			$groupid = $this->input->post('groupid'); 
			$groupname= $this->input->post('groupname');
			$grouplink=$this->input->post('grouplink');

			$fkregisteruserid=$this->input->post('allgroupuser[]');
			$fkregisterleaderid=$this->input->post('allgroupleader[]');

			$fields=array(
			            'groupid'=>$groupid,
			            'groupname'=>$groupname,
						'grouplink'=>$grouplink,


						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );
				echo "<pre>";
				print_r($fields);
				$whereArray=array('groupid'=>$groupid);
				$this->Commonmodel->updateRecord("group_master",$fields,$whereArray);

				$registeruserId=0;
			$registeruserId= $this->Commonmodel->updateRecord("group_master",$fields,$whereArray);

			 
			 if($registeruserId>0)
			 { 
				$whereArray=array('fkgroupid'=>$groupid);
		    	$this->AddGroup_model->deleteRecord('groupuser_master',$whereArray);

				if(!empty($fkregisteruserid))
				{ 

				  for($i=0;$i<count($fkregisteruserid);$i++)
				  { 
					  $insertkeys=array(
					  'fkgroupid'=>$groupid,
					  'fkregisterid'=>$fkregisteruserid[$i],
						'created_by'=>1
				
					 );
				
				  $this->Commonmodel->insertRecord("groupuser_master",$insertkeys);
				  
				   }
				 }
				 $whereArray=array('fkgroupid'=>$groupid);
				 $this->AddGroup_model->deleteRecord("groupleader_master",$whereArray);

				 if(!empty($fkregisterleaderid))
          			{ 
						
						for($i=0;$i<count($fkregisterleaderid);$i++)
						{ 
							$insertkeys=array(
							'fkgroupid'=>$groupid,
							'fkregisterid'=>$fkregisterleaderid[$i],
							'created_by'=>1,
			
							);
							echo "<pre>";
								print_r($fields);
						// $whereArray=array('fkregisterid'=>$fkgroupid); //fkregisterid
						$this->Commonmodel->insertRecord("groupleader_master",$insertkeys);
						
						}
					}
				}

				// $groupid=0;
				// $groupid= $this->Commonmodel->updateRecord("group_master",$fields,$whereArray);
		  
				// if($groupid>0)
				// { 
				//    if(!empty($fkregisteruserid))
          		// 	{
				// 		$whereArray=array('fkgroupid'=>$groupid);
				//    $this->AddGroup_model->deleteRecord("groupuser_master",$whereArray);

				// 		for($i=0;$i<count($fkregisteruserid);$i++)
				// 		{ 
				// 			$insertkeys=array(
				// 			'fkgroupid'=>$groupid,
				// 			'fkregisterid'=>$fkregisteruserid[$i],
				// 			'created_by'=>1,
			
				// 			);
				// 			echo "<pre>";
				// 				print_r($fields);
				// 		// $whereArray=array('fkregisterid'=>$fkgroupid); //fkregisterid
				// 		$this->Commonmodel->insertRecord("groupuser_master",$insertkeys);
				// 		}
				// 	}

					// if(!empty($fkregisterleaderid))
          			// { 
					// 	$whereArray=array('fkgroupid'=>$groupid);
					// 	$this->AddGroup_model->deleteRecord("groupleader_master",$whereArray);

					// 	for($i=0;$i<count($fkregisterleaderid);$i++)
					// 	{ 
					// 		$insertkeys=array(
					// 		'fkgroupid'=>$groupid,
					// 		'fkregisterid'=>$fkregisterleaderid[$i],
					// 		'created_by'=>1,
			
					// 		);
					// 		echo "<pre>";
					// 			print_r($fields);
					// 	// $whereArray=array('fkregisterid'=>$fkgroupid); //fkregisterid
					// 	$this->Commonmodel->insertRecord("groupleader_master",$insertkeys);
						
					// 	}
					// }
				// }
	}


}
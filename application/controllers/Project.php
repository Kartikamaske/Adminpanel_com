<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Project_model');
        
    }
	
	
	public function index()

	{
        $data['data']=$this->Project_model->getallProject();

		$data['userByLogin']=$this->Project_model->getUserByLogin();


        // echo "<pre>";
        // print_r($data);
	
		$this->load->view('common/header_view',$data);
		$this->load->view('Project_management/modifyproject',$data);
		$this->load->view('common/footer_view');
	}

    public function create()
	{
		
		$data['Ptype']=$this->Project_model->getallProjectType();
		$data['Ctype']=$this->Project_model->getallProjectType2();
		$data['Ttype']=$this->Project_model->getallProjectType3();
		$data['Gtype']=$this->Project_model->getallProjectType4();
		$data['Atype']=$this->Project_model->getallProjectType5();
		$data['Btype']=$this->Project_model->getallProjectType6();
		$data['Utype']=$this->Project_model->getallProjectType7();
		$data['TTtype']=$this->Project_model->getalltag8();
		$data['userByLogin']=$this->Project_model->getUserByLogin();


// echo "<pre>";
// 		print_r($data);

		$this->load->view('common/header_view',$data);
		$this->load->view('Project_management/Project_view3',$data); //new data fetch
		$this->load->view('common/footer_view');



	}
	
  
	function insertProject(){

		$projectName= $this->input->post('projectName'); 
	    $MarathiName= $this->input->post('MarathiName');
		$ShortName= $this->input->post('ShortName');
		$projectstartDate= $this->input->post('projectstartDate');
		$projectendDate= $this->input->post('projectendDate'); 
		 $fktagId= $this->input->post('fktagId');
		 
		 $fkprojectTypenameId= $this->input->post('fkprojectTypenameId');
		 $fkprojectTypenameId2= $this->input->post('fkprojectTypenameId2');
		 $fkprojectTypenameId3= $this->input->post('fkprojectTypenameId3');
		 $fkprojectTypenameId4= $this->input->post('fkprojectTypenameId4');
		 $fkprojectTypenameId5= $this->input->post('fkprojectTypenameId5');
		 $fkprojectTypenameId6= $this->input->post('fkprojectTypenameId6');
		 $fkprojectTypenameId7= $this->input->post('fkprojectTypenameId7');
	

		 
		  $fields=array(

			             'projectName'=>$projectName,
						  'MarathiName'=>$MarathiName,
						  'ShortName'=>$ShortName,
						 'projectstartDate'=>$projectstartDate,
						 'projectendDate'=>$projectendDate,
						 'fkprojectTypenameId'=>$fkprojectTypenameId,
						 'fkprojectTypenameId2'=>$fkprojectTypenameId2,
						 'fkprojectTypenameId3'=>$fkprojectTypenameId3,
						 'fkprojectTypenameId4'=>$fkprojectTypenameId4,
						 'fkprojectTypenameId5'=>$fkprojectTypenameId5,
						 'fkprojectTypenameId6'=>$fkprojectTypenameId6,
						 'fkprojectTypenameId7'=>$fkprojectTypenameId7,
						
					
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);

			// echo json_encode($fields);

			// $this->db->insert('project_master',$fields);  

		 $getId = $this->Commonmodel->insertRecord("project_master",$fields);


	// for loop to save tag names in seprate table
		if(!empty($fktagId))
			{ 

			  for($i=0;$i<count($fktagId);$i++)
			  { 
				  $insertkeys=array(
				  'fkprojectId'=>$getId,
				  'fktagId'=>$fktagId[$i],
					'created_by'=>1,
	
						   );
				 
			  $this->Commonmodel->insertRecord("tag_master",$insertkeys);
			  
			   }
			 }
	  } 
   
   
	  public function update()

	  {
		  $data['dataa']=$this->Project_model->getallProjectByid($this->uri->segment(3));

		//  $data['country']=$this->project_master->getCountry();

		$data['tagsdata']=$this->Project_model->gettagsdata($this->uri->segment(3));

		// echo "<pre>";
		// print_r($data);

		



		$data['Ptype']=$this->Project_model->getallProjectType();

		$data['Ctype']=$this->Project_model->getallProjectType2();
		$data['Ttype']=$this->Project_model->getallProjectType3();
		$data['Gtype']=$this->Project_model->getallProjectType4();
		$data['Atype']=$this->Project_model->getallProjectType5();
		$data['Btype']=$this->Project_model->getallProjectType6();
		$data['Utype']=$this->Project_model->getallProjectType7();
		$data['TTtype']=$this->Project_model->getalltagsType8();


		$this->load->view('common/header_view',$data);
		$this->load->view('Project_management/Project_view3',$data);
		$this->load->view('common/footer_view');

	  }
   
	  public function updateProject()
	  
	  {
		

		$projectName= $this->input->post('projectName'); 
		 $MarathiName= $this->input->post('MarathiName');
		 $projectstartDate= $this->input->post('projectstartDate');
		 $projectendDate= $this->input->post('projectendDate'); 
		 $ShortName= $this->input->post('ShortName');
		 $fktagId= $this->input->post('fktagId');

		//  $secmobileNo= $this->input->post('secmobileNo'); 
		//  $maild= $this->input->post('maild');
		 

		
		$projectId= $this->input->post('projectId'); 


			$fields=array(
				
			            'projectId'=>$projectId,
			            'projectName'=>$projectName,
						 'MarathiName'=>$MarathiName,
						 'projectstartDate'=>$projectstartDate,
						 'projectendDate'=>$projectendDate,
						 'ShortName'=>$ShortName,
						//  'fktagId'=>$fktagId,
						//  'secmobileNo'=>$secmobileNo,
						//  'maild'=>$maild,
						
			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );

		   echo "<pre>";
		   print_r($fields);
		  $whereArray=array('projectId'=>$projectId);

	
		  $projectidd=0;
	
		  $projectidd= $this->Commonmodel->updateRecord("project_master",$fields,$whereArray);
		   
		//    tag master update
		


			// $recipeIdd= $this->Commonmodel->updateRecord("recipe_master",$fields,$whereArray);

			 
			 if($projectidd>0)
			 { 
				$whereArray=array('fkprojectId'=>$projectId);
		    	$this->Project_model->deleteRecord('tag_master',$whereArray);

				if(!empty($fktagId))
				{ 

				  for($i=0;$i<count($fktagId);$i++)
				  { 
					  $insertkeys=array(
					  'fkprojectId'=>$projectId,
					  'fktagId'=>$fktagId[$i],
						'created_by'=>1
				
					 );
				
				  $this->Commonmodel->insertRecord("tag_master",$insertkeys);
				  
				   }
				 }
				}

		   

	  } 
		  
		}


		
	   
	
	

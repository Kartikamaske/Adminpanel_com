<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskcreationEdit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('TaskcreationEdit_model');
        
    }
	
	
	public function index()
	{


        $data['dataa']=$this->TaskcreationEdit_model->getalldata();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);
        $this->load->view('taskmanagement/taskcreation_viewEdit',$data);
		$this->load->view('common/footer_view');
	

	}




    function inserttask(){
		
		$fkuserId= $this->input->post('fname'); 
		// $fktaskassignId= $this->input->post('fktaskassignId'); 
		 $fktaskID= $this->input->post('taskname');
		 $processflag= $this->input->post('processflag');
		 $description= $this->input->post('description'); 
		 $expectedtime= $this->input->post('expectedtime');
		 
		//  $photo1= $this->input->post('photo1');


		
		 
	   //   image code start
   
	   $photo1 = '';  
	   if($_FILES["photo1"]["name"] != '')  
		 {  
			$photo1 = $this->upload_image1();  
		 }  
	  else  
		 {  
			 $photo1 = $this->input->post("hidden_photo1");  
		 } 
	   //   image code end

	  
		 
		 
		
		  $fields=array(

			             'fkuserId'=>$fkuserId,
						//  'fktaskassignId'=>$fktaskassignId,
						 'fktaskID'=>$fktaskID,
						 'processflag'=>$processflag,
						 'description'=>$description,
						 'expectedtime'=>$expectedtime,
						 'photo1'=>$photo1,
						 

	
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("taskassignsub_master",$fields);
	  } 
   
   
   
	  function upload_image1()   
	  {  
		if(isset($_FILES["photo1"]))  
		  {  
			  if($_FILES["photo1"]["name"] != '')  
				{ 
			$extension = explode('.', $_FILES['photo1']['name']);  
			$new_name = rand() . '.' . $extension[1];  
			$destination = './upload/' . $new_name;  
			move_uploaded_file($_FILES['photo1']['tmp_name'], $destination);
			return $new_name;  
			  }
		   }  
	  }



	  public function update(){
 
        $data['dataa']=$this->TaskcreationEdit_model->getallUserid($this->uri->segment(3));

		// $data['data']=$this->TaskcreationEdit_model->getalltaskforupdate();


        //  echo "<pre>";
		// print_r($data);

		$this->load->view('common/header_view',$data);

		$this->load->view('taskmanagement/taskcreation_viewEdit',$data);

		$this->load->view('common/footer_view');

      }




	  public function updatetask()
	  {



		$taskassignsubId = $this->input->post('taskassignsubId'); 
		 $processflag= $this->input->post('processflag');
		 $description= $this->input->post('description'); 
		 $expectedtime= $this->input->post('expectedtime');
		$taskassignsubId = $this->input->post('taskassignsubId'); 
		


		$photo1=$this->input->post('photo1');

			 $photo1='';
			  if ($_FILES["photo1"]["name"]!='') {
				$photo1=$this->upload_image1();
				# code...
			  }
			  else{
				  $photo1=$this->input->post("hidden_photo1");
			  }
       
        
			$fields=array(
				 
				  'taskassignsubId '=>$taskassignsubId,
				//   'fktaskassignId'=>$fktaskassignId,
				//   'fkuserId'=>$fkuserId,
				//   'fktaskID'=>$fktaskID,
				  'processflag'=>$processflag,
				  'description'=>$description,
				  'expectedtime'=>$expectedtime,
				  'photo1'=>$photo1,
			      

			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );
		//    echo "<pre>";
		//    print_r($fields);

		  $whereArray=array('taskassignsubId'=>$taskassignsubId);

          $this->Commonmodel->updateRecord("taskassignsub_master",$fields,$whereArray);


    } 

	  
	  }




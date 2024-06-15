<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taskmanagement extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Taskmanagement_model');
        
    }
	
	
	public function index()
	{
        $data['data']=$this->Taskmanagement_model->getalltask();

		$data['data']=$this->Taskmanagement_model->getalltask2();

		$data['data']=$this->Taskmanagement_model->getalltask3();

		$data['data']=$this->Taskmanagement_model->getalltask4();

		$data['data']=$this->Taskmanagement_model->getalltask5();

		$data['data']=$this->Taskmanagement_model->getalltask6();
		
		$data['data']=$this->Taskmanagement_model->getalltask7();

		$data['data']=$this->Taskmanagement_model->getalltask8();

		$data['data']=$this->Taskmanagement_model->getalltask9();

		// $data['data']=$this->Taskmanagement_model->getTasktype();


        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('Taskmanagement/modifyTaskManagement_view',$data);

		$this->load->view('common/footer_view');
	

	}

    public function create()
	{
		$data['Gtype']=$this->Taskmanagement_model->getalltaskType2();
		$data['Ptype']=$this->Taskmanagement_model->getalltaskType3();
		$data['Ttype']=$this->Taskmanagement_model->getalltaskType4();
		$data['Wtype']=$this->Taskmanagement_model->getalltaskType5();
		$data['Rtype']=$this->Taskmanagement_model->getalltaskType6();
		$data['Utype']=$this->Taskmanagement_model->getalltaskType7();
		$data['Btype']=$this->Taskmanagement_model->getalltaskType8();
		$data['Stype']=$this->Taskmanagement_model->getalltaskType9();
		$data['showprojectname']=$this->Taskmanagement_model->getProjectName();

		$data['tasktype']=$this->Taskmanagement_model->getTasktype();


		//  echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('taskmanagement/Taskmanagement_view',$data);
		$this->load->view('common/footer_view');
	}
	
   

	function inserttask(){
		
		$taskname= $this->input->post('taskname'); 
		 $fktaskTypenameId1= $this->input->post('fktaskTypenameId1');
		 $fktaskTypenameId2= $this->input->post('fktaskTypenameId2');
		 $employeename= $this->input->post('employeename'); 
		 $workhours= $this->input->post('workhours');
		 $description= $this->input->post('description');

		 $startdate= $this->input->post('startdate'); 
		 $duedate= $this->input->post('duedate');
		 $fktaskTypenameId3= $this->input->post('fktaskTypenameId3');
		 $fktaskTypenameId4= $this->input->post('fktaskTypenameId4'); 
		 $fktaskTypenameId5= $this->input->post('fktaskTypenameId5'); 
		 $fktaskTypenameId6= $this->input->post('fktaskTypenameId6'); 
		 $fktaskTypenameId7= $this->input->post('fktaskTypenameId7'); 
		 $fktaskTypenameId8= $this->input->post('fktaskTypenameId8'); 

		 $tasktype= $this->input->post('tasktype'); 

		//  $url= $this->input->post('url');
		 
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

	   $photo2 = '';  
	   if($_FILES["photo2"]["name"] != '')  
		 {  
			$photo2 = $this->upload_image2();  
		 }  
	  else  
		 {  
			 $photo2 = $this->input->post("hidden_photo2");  
		 } 

		 //3rd
		 $photo3 = '';  
	   if($_FILES["photo3"]["name"] != '')  
		 {  
			$photo3 = $this->upload_image3();  
		 }  
	  else  
		 {  
			 $photo3 = $this->input->post("hidden_photo3");  
		 } 

		 //4th
		 $photo4 = '';  
		 if($_FILES["photo4"]["name"] != '')  
		   {  
			  $photo4 = $this->upload_image4();  
		   }  
		else  
		   {  
			   $photo4 = $this->input->post("hidden_photo4");  
		   }

		   //5th
		   $photo5 = '';  
		   if($_FILES["photo5"]["name"] != '')  
			 {  
				$photo5 = $this->upload_image5();  
			 }  
		  else  
			 {  
				 $photo5 = $this->input->post("hidden_photo5");  
			 }

	//    $audio = '';  
	//    if($_FILES["audio"]["name"] != '')  
	// 	 {  
	// 		$audio = $this->upload_audio();  
	// 	 }  
	//   else  
	// 	 {  
	// 		 $photo = $this->input->post("hidden_photo");  
	// 	 } 
		 
		
		  $fields=array(

			             'taskname'=>$taskname,
						 'fktaskTypenameId1'=>$fktaskTypenameId1,
						 'fktaskTypenameId2'=>$fktaskTypenameId2,
						 'employeename'=>$employeename,
						 'workhours'=>$workhours,
						 'description'=>$description,
						 'tasktype'=>$tasktype,
						 'startdate'=>$startdate,
						 'duedate'=>$duedate,
						 'fktaskTypenameId3'=>$fktaskTypenameId3,
						 'fktaskTypenameId4'=>$fktaskTypenameId4,
						 'fktaskTypenameId5'=>$fktaskTypenameId5,
						 'fktaskTypenameId6'=>$fktaskTypenameId6,
						 'fktaskTypenameId7'=>$fktaskTypenameId7,
						 'fktaskTypenameId8'=>$fktaskTypenameId8,
						 'photo1'=>$photo1,
						 'photo2'=>$photo2,
						 'photo3'=>$photo3,
						 'photo4'=>$photo4,
						 'photo5'=>$photo5,
						
						 
   
						
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("task_master",$fields);
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

	  function upload_image2()   
	  {  
		if(isset($_FILES["photo2"]))  
		  {  
			  if($_FILES["photo2"]["name"] != '')  
				{ 
			$extension = explode('.', $_FILES['photo2']['name']);  
			$new_name = rand() . '.' . $extension[1];  
			$destination = './upload/' . $new_name;  
			move_uploaded_file($_FILES['photo2']['tmp_name'], $destination);  
			return $new_name;  
			  }
		   }  
	  }

	  function upload_image3()   
	  {  
		if(isset($_FILES["photo3"]))  
		  {  
			  if($_FILES["photo3"]["name"] != '')  
				{ 
			$extension = explode('.', $_FILES['photo3']['name']);  
			$new_name = rand() . '.' . $extension[1];  
			$destination = './upload/' . $new_name;  
			move_uploaded_file($_FILES['photo3']['tmp_name'], $destination);  
			return $new_name;  
			  }
		   }  
	  }

	  function upload_image4()   
	  {  
		if(isset($_FILES["photo4"]))  
		  {  
			  if($_FILES["photo4"]["name"] != '')  
				{ 
			$extension = explode('.', $_FILES['photo4']['name']);  
			$new_name = rand() . '.' . $extension[1];  
			$destination = './upload/' . $new_name;  
			move_uploaded_file($_FILES['photo4']['tmp_name'], $destination);  
			return $new_name;  
			  }
		   }  
	  }

	  function upload_image5()   
	  {  
		if(isset($_FILES["photo5"]))  
		  {  
			  if($_FILES["photo5"]["name"] != '')  
				{ 
			$extension = explode('.', $_FILES['photo5']['name']);  
			$new_name = rand() . '.' . $extension[1];  
			$destination = './upload/' . $new_name;  
			move_uploaded_file($_FILES['photo5']['tmp_name'], $destination);  
			return $new_name;  
			  }
		   }  
	  }

	
   
	  public function update()
	  {
		  $data['dataa']=$this->Taskmanagement_model->getallSongByid($this->uri->segment(3));

		//   echo "<pre>";
		//   print_r($data);

		  $data['Gtype']=$this->Taskmanagement_model->getalltaskType2();

		  $data['Ptype']=$this->Taskmanagement_model->getalltaskType3();

		  $data['Ttype']=$this->Taskmanagement_model->getalltaskType4();

		  $data['Wtype']=$this->Taskmanagement_model->getalltaskType5();

		  $data['Rtype']=$this->Taskmanagement_model->getalltaskType6();

		  $data['Utype']=$this->Taskmanagement_model->getalltaskType7();

		  $data['Btype']=$this->Taskmanagement_model->getalltaskType8();

		  $data['Stype']=$this->Taskmanagement_model->getalltaskType9();

		//   $data['tasktype']=$this->Taskmanagement_model->getTasktype();



		//  $data['country']=$this->Taskmanagement_model->getCountry();

		// echo "<pre>";
		// print_r($data);
   
		$this->load->view('common/header_view');
		$this->load->view('taskmanagement/Taskmanagement_view',$data);
		$this->load->view('common/footer_view');

	  }
   
	  public function updatetask()
	  {
		
			$taskId= $this->input->post('taskId'); 
			$taskname= $this->input->post('taskname'); 
			$fktaskTypenameId1= $this->input->post('fktaskTypenameId1');
			$fktaskTypenameId2= $this->input->post('fktaskTypenameId2');
			$employeename= $this->input->post('employeename'); 
			$workhours= $this->input->post('workhours');
			$description= $this->input->post('description');
			$tasktype= $this->input->post('tasktype');
			$startdate= $this->input->post('startdate'); 
			$duedate= $this->input->post('duedate');
			$fktaskTypenameId3= $this->input->post('fktaskTypenameId3');
			$fktaskTypenameId4= $this->input->post('fktaskTypenameId4'); 
			$fktaskTypenameId5= $this->input->post('fktaskTypenameId5'); 
			$fktaskTypenameId6= $this->input->post('fktaskTypenameId6'); 
			$fktaskTypenameId7= $this->input->post('fktaskTypenameId7'); 
			$fktaskTypenameId8= $this->input->post('fktaskTypenameId8'); 

		 $taskId= $this->input->post('taskId'); 

   
		
   
			 $photo1=$this->input->post('photo1');
			 $photo1='';
			  if ($_FILES["photo1"]["name"]!='') {
				$photo1=$this->upload_image1();
				# code...
			  }
			  else{
				  $photo1=$this->input->post("hidden_photo1");
			  }


				$photo2=$this->input->post('photo2');
				$photo2='';
				if ($_FILES["photo2"]["name"]!='') {
					$photo2=$this->upload_image2();
					# code...
				}
				else{
					$photo2=$this->input->post("hidden_photo2");
				}
        

				$photo3=$this->input->post('photo3');
				$photo3='';
				if ($_FILES["photo3"]["name"]!='') {
					$photo3=$this->upload_image3();
					# code...
				}
				else{
					$photo3=$this->input->post("hidden_photo3");
				}


				$photo4=$this->input->post('photo4');
				$photo4='';
				 if ($_FILES["photo4"]["name"]!='') {
				   $photo4=$this->upload_image4();
				   # code...
				 }
				 else{
					 $photo4=$this->input->post("hidden_photo4");
				 }


				 $photo5=$this->input->post('photo5');
				 $photo5='';
				  if ($_FILES["photo5"]["name"]!='') {
					$photo5=$this->upload_image5();
					# code...
				  }
				  else{
					  $photo5=$this->input->post("hidden_photo5");
				  }
			

			$fields=array(
				
						'taskId'=>$taskId,
			             'taskname'=>$taskname,
						 'fktaskTypenameId1'=>$fktaskTypenameId1,
						 'fktaskTypenameId2'=>$fktaskTypenameId2,
						 'employeename'=>$employeename,
						 'workhours'=>$workhours,
						 'description'=>$description,
						 'startdate'=>$startdate,
						 'duedate'=>$duedate,
						 'fktaskTypenameId3'=>$fktaskTypenameId3,
						 'fktaskTypenameId4'=>$fktaskTypenameId4,
						 'fktaskTypenameId5'=>$fktaskTypenameId5,
						 'fktaskTypenameId6'=>$fktaskTypenameId6,
						 'fktaskTypenameId7'=>$fktaskTypenameId7,
						 'fktaskTypenameId8'=>$fktaskTypenameId8,
						 'photo1'=>$photo1,
						 'photo2'=>$photo2,
						 'photo3'=>$photo3,
						 'photo4'=>$photo4,
						 'photo5'=>$photo5,
						 

			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );

		   echo "<pre>";
		   print_r($fields);
		  $whereArray=array('taskId'=> $taskId);
   
		   $this->Commonmodel->updateRecord("task_master",$fields,$whereArray);
		  
		}


		
	   
	
	
}
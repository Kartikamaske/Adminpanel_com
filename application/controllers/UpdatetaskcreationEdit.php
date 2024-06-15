<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdatetaskcreationEdit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('TaskcreationEdit_model');
        
    }
	
	
	public function index()
	{


        // $data['dataa']=$this->TaskcreationEdit_model->getalldata();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);
        $this->load->view('taskmanagement/Updatetaskcreation_viewEdit');
		$this->load->view('common/footer_view');
	

	}




    function inserttask(){
		

		//  $endtime= $this->input->post('endtime');
		 $processflag= $this->input->post('processflag');
	

		  $fields=array(

			            
						//  'endtime'=>$endtime,
						 'processflag'=>$processflag,
						 
						 

	
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);

			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("taskassignsub_master",$fields);
	  } 
   
   
   

	  public function update(){
 
        $data['dataa']=$this->TaskcreationEdit_model->getallUserid($this->uri->segment(3));

		// $data['data']=$this->TaskcreationEdit_model->getalltaskforupdate();


        //  echo "<pre>";
		// print_r($data);

		$this->load->view('common/header_view',$data);

		$this->load->view('taskmanagement/Updatetaskcreation_viewEdit',$data);

		$this->load->view('common/footer_view');

      }




	  public function updatetask()
	  {

        
		$taskassignsubId = $this->input->post('taskassignsubId'); 
        // $endtime= $this->input->post('endtime');
		$processflag= $this->input->post('processflag');
	


		$taskassignsubId = $this->input->post('taskassignsubId'); 
		


			$fields=array(

				 
				  'taskassignsubId '=>$taskassignsubId,
                //   'endtime'=>$endtime,
				    'processflag'=>$processflag,
				
				  
			      

			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );
		//    echo "<pre>";
		//    print_r($fields);

		  $whereArray=array('taskassignsubId'=>$taskassignsubId);

          $this->Commonmodel->updateRecord("taskassignsub_master",$fields,$whereArray);


    } 


	  

	

	  
	  }




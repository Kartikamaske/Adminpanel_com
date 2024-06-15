<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updateindivisualtask extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Indivisualtask_model');
        
    }
	
	
	public function index()
	{


        // $data['dataa']=$this->Indivisualtask_model->getalldata();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);
        $this->load->view('Indivisualtask/Updateindivisual_view');
		$this->load->view('common/footer_view');
	

	}




    function inserttask(){
		

		 $endtime= $this->input->post('endtime');
		 $processflag= $this->input->post('processflag');
	

		  $fields=array(

			            
						 'endtime'=>$endtime,
						 'processflag'=>$processflag,
						 
						 

	
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);

			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("indivisualtask_master",$fields);
	  } 
   
   
   

	  public function update(){
 
        $data['dataa']=$this->Indivisualtask_model->getallUserid($this->uri->segment(3));

		// $data['data']=$this->Indivisualtask_model->getalltaskforupdate();


        //  echo "<pre>";
		// print_r($data);

		$this->load->view('common/header_view',$data);

		$this->load->view('Indivisualtask/Updateindivisual_view',$data);

		$this->load->view('common/footer_view');

      }




	  public function updatetask()
	  {

        
		$IndivisualtaskId = $this->input->post('IndivisualtaskId'); 
        $endtime= $this->input->post('endtime');
		$processflag= $this->input->post('processflag');
	


		$IndivisualtaskId = $this->input->post('IndivisualtaskId'); 
		


			$fields=array(

				 
				  'IndivisualtaskId '=>$IndivisualtaskId,
                  'endtime'=>$endtime,
				    'processflag'=>$processflag,
				
				  
			      

			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );
		//    echo "<pre>";
		//    print_r($fields);

		  $whereArray=array('IndivisualtaskId'=>$IndivisualtaskId);

          $this->Commonmodel->updateRecord("indivisualtask_master",$fields,$whereArray);


    } 


	  

	

	  
	  }




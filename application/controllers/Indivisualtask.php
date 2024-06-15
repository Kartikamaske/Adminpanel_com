<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indivisualtask extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Indivisualtask_model');
        
    }
	
	public function index()
	{


        // $data['data']=$this->Indivisualtask_model->getallfordetail();
        $data['data']=$this->Indivisualtask_model->getalldata();

        $data['getfkuser']=$this->Indivisualtask_model->getuserid();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);
        $this->load->view('Indivisualtask/modifyindivisualtaskview',$data);
		$this->load->view('common/footer_view');
	
        
	}


    public function create()

	{

        $data['getfkuser']=$this->Indivisualtask_model->getuserid();

       				//  echo "<pre>";
					// print_r($data);

        		// // print_r($data['STTtype']);

         $this->load->view('common/header_view',$data);
        
        $this->load->view('Indivisualtask/Indivisualtask_view',$data);
            
        $this->load->view('common/footer_view');


	}



   public function inserttask(){

        $taskname= $this->input->post('taskname'); 
         $startdate= $this->input->post('startdate');
         $starttime=$this->input->post('starttime');
         $taskdate=$this->input->post('taskdate');
         $processflag=$this->input->post('processflag');
         $expexteddatetime=$this->input->post('expexteddatetime');
         $fkuserId=$this->input->post('registrationId');


          $fields=array(

                         'taskname'=>$taskname,
                         'startdate'=>$startdate,
                         'starttime'=>$starttime,
                         'taskdate'=>$taskdate,
                         'expexteddatetime'=>$expexteddatetime,
                         'processflag'=>$processflag,
                         'fkuserId'=>$fkuserId,

                         
                'created_date'=>date('Y-m-d H:i:s'),
                'created_by'=>1);
                
            echo json_encode($fields);

        $this->Commonmodel->insertRecord("indivisualtask_master",$fields);

      }


      public function update(){

 
        $data['dataa']=$this->Indivisualtask_model->getallUserid($this->uri->segment(3));

		// $data['data']=$this->Indivisualtask_model->getalltaskforupdate();

        //  echo "<pre>";
		// print_r($data);

		$this->load->view('common/header_view',$data);

        $this->load->view('Indivisualtask/Indivisualtask_view',$data);

		$this->load->view('common/footer_view');

      }


	  public function updatetask()
	  {


		$IndivisualtaskId = $this->input->post('IndivisualtaskId'); 
         $enddate= $this->input->post('enddate');
         $endtime=$this->input->post('endtime');
         $processflag=$this->input->post('processflag');
         $expexteddatetime=$this->input->post('expexteddatetime');
		$IndivisualtaskId = $this->input->post('IndivisualtaskId'); 
        

        // if($res==false){
        
			$fields=array(
				 
				        'IndivisualtaskId '=>$IndivisualtaskId,
                        // 'taskname'=>$taskname,
                        //  'startdate'=>$startdate,
                         'enddate'=>$enddate,
                        //  'starttime'=>$starttime,
                         'endtime'=>$endtime,
                        //  'taskdate'=>$taskdate,
                         'processflag'=>$processflag,
                         'expexteddatetime'=>$expexteddatetime,


				
			      

			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );
		//    echo "<pre>";
		//    print_r($fields);

		  $whereArray=array('IndivisualtaskId'=>$IndivisualtaskId);

          $this->Commonmodel->updateRecord("indivisualtask_master",$fields,$whereArray);

        //   echo 1;
        // }
        // else{

        //     echo 2;
        //     return false;
        // }


    } 



}
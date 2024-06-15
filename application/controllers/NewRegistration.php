<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewRegistration extends CI_Controller {
    public function __construct()
    {

        parent::__construct();
        $this->load->model('NewRegistration_model');
      
    }
	
	public function index()
	{
        
        $data['user']=$this->NewRegistration_model->getallUser();
        $data['userByLogin']=$this->NewRegistration_model->getUserByLogin();
        $this->load->view('common/header_view',$data);
		$this->load->view('NewRegistration/NewRegistrationDetail_view',$data);
        $this->load->view('common/footer_view');

	}

    public function create()
	{
        $data['enquiry']=$this->NewRegistration_model->getallEnquirytype();
        $data['tech']=$this->NewRegistration_model->getallTechnology();
        $data['duration']=$this->NewRegistration_model->getallDuration();
        $data['college']=$this->NewRegistration_model->getallCollege();
        $data['qualification']=$this->NewRegistration_model->getallQualification();
        $data['sem']=$this->NewRegistration_model->getallSem();
        $data['jobRole']=$this->NewRegistration_model->getallJobrole();


        //  echo "<pre>";
        // print_r($data);
        // $this->load->view('common/header_view');
		$this->load->view('NewRegistration/NewRegistration_view',$data);
        // $this->load->view('common/footer_view');

	}

    public function checkuserexist()
	{
	 $mobile_no=$this->input->post('mobile_no');
	 $count=$this->NewRegistration_model->checkMobileExist($mobile_no);
	 if($count>0)
	 {
	   echo 1;
	 }
	 else
	 {
	   echo 0;
	 }
	}
    
   
    function insertNewRegister(){
        $fname= $this->input->post('fname'); 
         $email= $this->input->post('email');
         $mobile_no= $this->input->post('mobile_no');
         $mobile_no2= $this->input->post('mobile_no2');
         $address=$this->input->post('address');
         $gender=$this->input->post('gender');
         $dob=$this->input->post('dob');
         $enquirytype= $this->input->post('enquirytype'); 
         $technology=$this->input->post('technology');
         $duration=$this->input->post('duration'); 
         $ex_starting_date=$this->input->post('ex_starting_date');
         $college=$this->input->post('college');
         $qualification=$this->input->post('qualification');
         $sem=$this->input->post('sem');
         $jobrole=$this->input->post('jobrole');
         $jobexpRadio=$this->input->post('jobexpRadio');
         $expdetails=$this->input->post('expdetails');
         $purpose=$this->input->post('purpose');
         $reference=$this->input->post('reference');



                

          $fields=array('fname'=>$fname,
                         'email'=>$email,
                         'mobile_no'=>$mobile_no,
                         'mobile_no2'=>$mobile_no2,
                         'address'=>$address,
                         'gender'=>$gender,
                         'dob'=>$dob,
                         'fkEnquiryTypeId'=>$enquirytype,
                         'fkTechnologyId'=>$technology,
                         'fkDurationId'=>$duration,
                         'ex_starting_date'=>$ex_starting_date,
                         'fkCollageId'=>$college,
                         'fkQualificationId'=>$qualification,
                         'fkSemId'=>$sem,
                         'fkRoleId'=>$jobrole,
                         'fkWorkExperienceId'=>$jobexpRadio,
                         'detail'=>$expdetails,
                         'purpose'=>$purpose,
                         'reference'=>$reference,

                         
                'created_date'=>date('Y-m-d H:i:s'),
                'created_by'=>1);
            echo json_encode($fields);
        $this->Commonmodel->insertRecord("registration_master",$fields);

        // $id=$this->Commonmodel->insertRecord("registration_master",$fields);
        // $this->session->set_userdata('username',$id);
        // $this->session->set_userdata('password',$id);


      }
      
      
    //   function update(){

    //     $data['dataa']=$this->NewRegistration_model->getallUserid($this->uri->segment(3));
	// 	// echo "<pre>";
	// 	// print_r($data['dataa'][0]->fkEnquiryTypeId);
    //     $data['enquiry']=$this->NewRegistration_model->getallEnquirytype();
    //     $data['tech']=$this->NewRegistration_model->getallTechnology();
    //     $data['duration']=$this->NewRegistration_model->getallDuration();
    //     $data['college']=$this->NewRegistration_model->getallCollege();
    //     $data['qualification']=$this->NewRegistration_model->getallQualification();
    //     $data['sem']=$this->NewRegistration_model->getallSem();
    //     $data['jobRole']=$this->NewRegistration_model->getallJobrole();
	// 	// $this->load->view('common/header_view');
    //     // print_r($data['enquiry']);
	// 	$this->load->view('NewRegistration/NewRegistration_view',$data);
	// 	// $this->load->view('common/footer_view');

    //   }


    //   public function updateUser()
	//   {
	// 	$registrationId= $this->input->post('registrationId'); 
    //     $fname= $this->input->post('fname'); 
    //     $email= $this->input->post('email');
    //      $mobile_no= $this->input->post('mobile_no');
    //      $mobile_no2= $this->input->post('mobile_no2');
    //      $address=$this->input->post('address');
    //      $gender=$this->input->post('gender');
    //      $enquirytype= $this->input->post('enquirytype'); 
    //      $technology=$this->input->post('technology');
    //      $duration=$this->input->post('duration'); 
    //      $ex_starting_date=$this->input->post('ex_starting_date');
    //      $college=$this->input->post('college');
    //      $qualification=$this->input->post('qualification');
    //      $sem=$this->input->post('sem');
    //      $jobrole=$this->input->post('jobrole');
    //      $jobexpRadio=$this->input->post('jobexpRadio');
    //      $expdetails=$this->input->post('expdetails');
    //      $purpose=$this->input->post('purpose');


        
	// 		$fields=array(
	// 		            'registrationId'=>$registrationId,
	// 		            'fname'=>$fname,
    //                     'email'=>$email,
    //                      'mobile_no'=>$mobile_no,
    //                      'mobile_no2'=>$mobile_no2,
    //                      'address'=>$address,
    //                      'gender'=>$gender,
    //                      'fkEnquiryTypeId'=>$enquirytype,
    //                      'fkTechnologyId'=>$technology,
    //                      'fkDurationId'=>$duration,
    //                      'ex_starting_date'=>$ex_starting_date,
    //                      'fkCollageId'=>$college,
    //                      'fkQualificationId'=>$qualification,
    //                      'fkSemId'=>$sem,
    //                      'fkRoleId'=>$jobrole,
    //                      'fkWorkExperienceId'=>$jobexpRadio,
    //                      'detail'=>$expdetails,
    //                      'purpose'=>$purpose,


	// 		  'modified_date'=>date('Y-m-d H:i:s'),
	// 		  'modified_by'=>1,
	// 	   );
	// 	   echo "<pre>";
	// 	   print_r($fields);
	// 	  $whereArray=array('registrationId'=>$registrationId);
   
	// 	   $this->Commonmodel->updateRecord("registration_master",$fields,$whereArray);
		  
	// 	}
	
}
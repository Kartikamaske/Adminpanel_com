<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateUser extends CI_Controller {
    public function __construct()
    {

        parent::__construct();
        $this->load->model('UpdateUser_model');
      
    }
	
	public function index()
	{
        $data['user']=$this->UpdateUser_model->getallUser();
        $this->load->view('common/header_view',$data);
		$this->load->view('UpdateUser/updateUser_view',$data);
        $this->load->view('common/footer_view');

	}    


    
      
    public function update(){
 
        $data['dataa']=$this->UpdateUser_model->getallUserid($this->uri->segment(3));
		
        $data['enquiry']=$this->UpdateUser_model->getallEnquirytype();
        $data['tech']=$this->UpdateUser_model->getallTechnology();
        $data['duration']=$this->UpdateUser_model->getallDuration();
        $data['college']=$this->UpdateUser_model->getallCollege();
        $data['qualification']=$this->UpdateUser_model->getallQualification();
        $data['sem']=$this->UpdateUser_model->getallSem();
        $data['jobRole']=$this->UpdateUser_model->getallJobrole();
        $data['group']=$this->UpdateUser_model->getallGroup();
       
        $data['groupmain']=$this->UpdateUser_model->getallGroupMain($this->uri->segment(3));
        //  echo "<pre>";
		// print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('UpdateUser/updateUser_view',$data);
		$this->load->view('common/footer_view');

      }

      public function updateUser()
	  {
		$registrationId= $this->input->post('registrationId'); 
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
         $status=$this->input->post('status');
         $username=$this->input->post('username');
         $password=$this->input->post('password');
         $totalamt=$this->input->post('totalamt');
         $paidamt=$this->input->post('paidamt');
         $remainamt=$this->input->post('remainamt');
         $exactInst1=$this->input->post('exactInst1');
         $firstfee=$this->input->post('firstfee');
         $instDate1=$this->input->post('instDate1');
         $regfee=$this->input->post('regfee');
         $regDate=$this->input->post('regDate');
         $exactInst2=$this->input->post('exactInst2');
         $secondfee=$this->input->post('secondfee');
         $instDate2=$this->input->post('instDate2');
         $exactInst3=$this->input->post('exactInst3');
         $thirdfee=$this->input->post('thirdfee');
         $instDate3=$this->input->post('instDate3');
         $exactInst4=$this->input->post('exactInst4');
         $fourthfee	=$this->input->post('fourthfee');
         $instDate4=$this->input->post('instDate4');
        //  $fkgroupid=$this->input->post('fkgroupid');
         $fkgroupid=$this->input->post('fkgroupid[]');
        //  $groupmainid=$this->input->post('groupmainid[]');


        
			$fields=array('registrationId'=>$registrationId,
			    //         'fname'=>$fname,
                //   'email'=>$email,
                //   'mobile_no'=>$mobile_no,
                //   'mobile_no2'=>$mobile_no2,
                //   'address'=>$address,
                //   'gender'=>$gender,
                //   'dob'=>$dob,
                //   'fkEnquiryTypeId'=>$enquirytype,
                //   'fkTechnologyId'=>$technology,
                //   'fkDurationId'=>$duration,
                //   'ex_starting_date'=>$ex_starting_date,
                //   'fkCollageId'=>$college,
                //   'fkQualificationId'=>$qualification,
                //   'fkSemId'=>$sem,
                //   'fkRoleId'=>$jobrole,
                //   'fkWorkExperienceId'=>$jobexpRadio,
                //   'detail'=>$expdetails,
                //   'purpose'=>$purpose,
                  'status'=>$status,
                  'username'=>$username,
                  'password'=>$password,
                  'totalamt'=>$totalamt,
                  'paidamt'=>$paidamt,
                  'remainamt'=> $remainamt,
                  'exactInst1'=>$exactInst1,
                  'firstfee'=>$firstfee,
                  'instDate1'=>$instDate1,
                  'regfee'=>$regfee,
                  'regDate'=>$regDate,
                  'exactInst2'=>$exactInst2,
                  'secondfee'=>$secondfee,
                  'instDate2'=>$instDate2,
                  'exactInst3'=>$exactInst3,
                  'thirdfee'=>$thirdfee,
                  'instDate3'=>$instDate3,
                  'exactInst4'=>$exactInst4,
                  'fourthfee'=>$fourthfee,
                  'instDate4'=>$instDate4,
                       

			  'modified_date'=>date('Y-m-d H:i:s'),
			  'modified_by'=>1,
		   );
		//    echo "<pre>";
		//    print_r($fields);
		  $whereArray=array('registrationId'=>$registrationId);
          $this->Commonmodel->updateRecord("registration_master",$fields,$whereArray);

          $registerid=0;
        
          $registerid=$this->Commonmodel->updateRecord("registration_master",$fields,$whereArray);

			 if($registerid>0)
			 { 
                
                $whereArray=array('fkregisterid'=>$registrationId);
                $this->UpdateUser_model->deleteRecord("groupmain_master",$whereArray);
                    if(!empty($fkgroupid))
                    { 
        
                        for($i=0;$i<count($fkgroupid);$i++)
                        { 
                            $insertkeys=array(
                            'fkregisterid'=>$registrationId,
                            'fkgroupid'=>$fkgroupid[$i],
                            'created_by'=>1,
            
                            );
                            // echo "<pre>";
                            //     print_r($fields);
                        // $whereArray=array('fkregisterid'=>$fkgroupid); //fkregisterid
                        $this->Commonmodel->insertRecord("groupmain_master",$insertkeys);
                        
                        }
                    }
			}
            } 

}

 

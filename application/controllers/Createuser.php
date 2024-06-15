<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createuser extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Country_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Createuser/createuserDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Createuser/createuser_view',$data);
		$this->load->view('common/footer_view');
	

	}
    public function daily()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Createuser/dailyuserDetailsview');
		$this->load->view('common/footer_view');
	

	}

    function insertUser(){
     $username= $this->input->post('username'); 
      $user_type= $this->input->post('user_type');
	  $reg_date= $this->input->post('reg_date'); 
      $exp_date= $this->input->post('exp_date');
	  $gender= $this->input->post('gender'); 
      $mob_no= $this->input->post('mob_no');
      $password= $this->input->post('password'); 
      $country= $this->input->post('country');
	  $state= $this->input->post('state'); 
      $district= $this->input->post('district');
	  $village= $this->input->post('village'); 
      $pincode= $this->input->post('pincode');
	  $reference= $this->input->post('reference'); 
      $package_type= $this->input->post('package_type');
	  $package_amount= $this->input->post('package_amount'); 
      $discount_type= $this->input->post('discount_type');
	  $discount_amount= $this->input->post('discount_amount'); 
      $total_amount= $this->input->post('total_amount');
	  $address= $this->input->post('address'); 
      $photo= $this->input->post('photo');
	 



       $fields=array('username'=>$username,
                      'user_type'=>$user_type,
					  'reg_date'=>$reg_date,
                      'exp_date'=>$exp_date,
					  'gender'=>$gender,
                      'mob_no'=>$mob_no,
					  'password'=>$password,
                      'country'=>$country,
					  'state'=>$state,
                      'district'=>$district,
					  'village'=>$village,
                      'pincode'=>$pincode,
					  'reference'=>$reference,
                      'package_type'=>$package_type,
					  'package_amount'=>$package_amount,
                      'discount_type'=>$discount_type,
					  'discount_amount'=>$discount_amount,
                      'total_amount'=>$total_amount,
					  'address'=>$address,
                      'photo'=>$photo,
					  
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("createuser_master",$fields);
   } 
	
	
}
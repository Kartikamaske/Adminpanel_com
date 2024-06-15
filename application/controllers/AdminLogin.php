<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        
        $this->load->model('AdminLogin_model');
    }
	
	public function index()
	{ 
		$this->load->view('Adminlogin/adminLogin_view');
		// $this->load->view('AdminLoginPage/adminLoginPage');
	}
	
	public function login_validation()
	{ 

		$username =  $this->input->post('username');
        $password =  $this->input->post('password');
       // echo $Name;
       // echo $password;
        
        // $data=$this->Login_model->AdminLogin($Name,$password);
        $data=$this->AdminLogin_model->LeaderLogin($username,$password);
        // echo "<pre>";
        //  print_r($data);

       
        if(!empty($data))
					{
						$newdata = array(
							
							'username'     => $username,
							'password'     => $data[0]->password,
							'registrationId'     => $data[0]->registrationId,
							
						
								);
							$this->session->sess_expiration = '10';
						$this->session->set_userdata($newdata);
						echo 1;
						
					}
					else
					{
						echo 2;
					}
	}
	   public function logout()
	{
		session_destroy();
		
        $this->load->view('Adminlogin/adminlogin');

	}
	
}

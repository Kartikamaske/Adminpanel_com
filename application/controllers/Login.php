<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        
        $this->load->model('Login_model');
    }
	
	public function index()
	{ 
		$this->load->view('WebView/Home/login');
	}
	

	public function login_validation()
	{ 

		$username =  $this->input->post('username');
        $password =  $this->input->post('password');
       // echo $userName;
       // echo $password;
        
        $data=$this->Login_model->login($username,$password);
        

       
        if(!empty($data))
					{
                      
						$newdata = array(
							
							'username'  => $username,
							'password'     => $data[0]->password,
							 'registrationId'     => $data[0]->registrationId,

								);
						
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
			   $this->load->view('WebView/Home/login');


	   
		   }
	
}

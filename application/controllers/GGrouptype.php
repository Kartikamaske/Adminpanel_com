<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GGrouptype extends CI_Controller{
    public function index(){

        $this->load->view('GGrouptype/grouptype_view');
    }

    Public function create(){
        
        
        $this->load->model('GGtype_model');

        $data['group']=$this->GGtype_model->getgroupType();

        //  echo "<pre>";
        //  print_r($data);

        // $data = [];

        // $data['grouptype'] = $groupType;
        
        $this->load->view('common/header_view');
        $this->load->view('GGrouptype/grouptype_view',$data);
        $this->load->view('common/footer_view');
    }


    public function selectUser()
    {
        
    //     $country_id = $this->input->post('country_id');
    //     $this->load->model('Common_model');
    //     $states = $this->Common_model->getStatesOfAcountry($country_id);
    //     // print_r($states);

    //     $data = [];
    //     $data['states'] = $states;
    //    $statesString = $this->load->view('states_select',$data,true); 
       
    //     //this view will not load....... it will retrun as string
    //     $response['states'] = $statesString;
    //     echo json_encode($response);


 
	    $groupid=$this->input->post('groupid');
	    // echo $groupid;
		$data=$this->GGtype_model->getgroup($groupid);
		echo json_encode($data);
		// print_r($data);



    }



}




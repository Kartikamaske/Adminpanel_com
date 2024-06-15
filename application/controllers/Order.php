<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('State_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->State_model->getallState();
        // echo "<pre>";
        // print_r($data);
		 $this->load->view('common/header_view');
		$this->load->view('Order/order_view');
		 $this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Order/order_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertOrder(){
        $item_name= $this->input->post('item_name'); 
         $quantity= $this->input->post('quantity');
         $rate= $this->input->post('rate');
         
         
        
          $fields=array('item_name'=>$item_name,
                         'quantity'=>$quantity,
                         'rate'=>$rate,
                         
                        
                         
                'created_date'=>date('Y-m-d H:i:s'),
                'created_by'=>1);
            echo json_encode($fields);
        $this->Commonmodel->insertRecord("order",$fields);
      } 

    
	
}
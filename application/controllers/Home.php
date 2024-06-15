<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
   public function __construct()
    {
        parent::__construct();

        
        $this->load->model(['Login_model','Home_model']);
		if($this->session->userdata('userId') == 0) {
			redirect('Login');
		}
        
       
    }
	
	public function index()
	{ 
		$data['data']=$this->Home_model->getallTopSong();
		$data['GenresdataH']=$this->Home_model->getallGenresHindiSong();
		$data['GenresdataE']=$this->Home_model->getallGenresEnglishSong();

		$data['All']=$this->Home_model->getallSong();
		$data['recent']=$this->Home_model->getallRecentPlayList();


		$this->load->view('WebView/common/header');
       
		$this->load->view('WebView/Home/home',$data);
		$this->load->view('WebView/common/footer');

	}

   






		   function insertAddList()
		   {
					 $fkuserIds = $this->input->post('fkuserIds'); 
				  $fksongIds = $this->input->post('fksongIds');
				  
						   $fields=array(
						 'fkuserId'=>$fkuserIds,
						 'fksongId'=>$fksongIds,
						 'is_active'=>1,
						 'created_by'=>$this->session->userdata('userId'),
						   'created_by'=>1,
						   'created_date'=>date('Y-m-d H:i:s')
						  
					   );
				   
					   $this->Commonmodel->insertRecord("addplaylist_master",$fields);
						echo json_encode($fields);
	   
						}
					 function insertRecentPlayList()
						{
								  $fkuserId = $this->input->post('fkuserId'); 
							      $fksongId = $this->input->post('fksongId');
							   
										$fields=array(
									  'fkuserId'=>$fkuserId,
									  'fksongId'=>$fksongId,
									  'is_active'=>1,
									  'created_by'=>$this->session->userdata('userId'),
										'created_by'=>1,
										'created_date'=>date('Y-m-d H:i:s')
									   
									);
								
									$this->Commonmodel->insertRecord("recentplaylist_master",$fields);
									 echo json_encode($fields);
					
									 }


									 public function getRecentlist(){
										$data=$this->Home_model->getallRecentPlayList();
										//  print_r( json_encode($data));


										if (empty($data)) {
										
											echo "<div colspan='12' class='text-center'> <b>No Record Found</b> </div>";
										 	
										}else{
											$i=1;
											foreach($data as $rw=>$value){
												$y=$value->songId;
												$i=$i+1;
												echo ' <div class="swiper-slide box">
												<div class="ms_rcnt_box">
													<div class="ms_rcnt_box_img">';

												echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

											  

											   
													echo ' <div class="ms_main_overlay">
													<div class="ms_box_overlay"></div>

													<div class="ms_more_icon">
                                                              <img src="'.base_url().'WebAssets/assets/images/svg/more.svg" alt="">
                                                          </div>
                                                          <ul class="more_option" id="bg">
                                                            
                                                            
                                                             
                                                              <li><a href="javascript:void(0)" onclick="requestAddList('.$y.','.$i.')"    name="btn_save" id="requestsongLable'.$y.'" ><span class="opt_icon"><span
                                                                              class="icon icon_playlst"></span></span>Add To
                                                                      Playlist</a>
                                                              </li>
                                                          
                                                          </ul>
												   
													 
												   
												   
												   
												</div>
											</div>';

											echo ' <audio onplay="recentPlayList('.$y.','.$i.')" class="ms_main_overlay audio3 "controls>
											<source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
									  </audio> ';

									  echo '
											<div class="ms_rcnt_box_text">
												<h3><a href="#">"'.$value->songName.'"</a></h3>
												<p>"'.$value->singer.'"</p> 
												</div>
												</div>
											</div>';    
											  $i++;                    
										  } 
										}
									} 
	
}

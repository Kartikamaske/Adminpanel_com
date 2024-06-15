<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTaskReport extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminTaskReport_model');
    }

	public function index()
	{
        //  $data['username']=$this->AdminTaskReport_model->getallUser();
         $data['username']=$this->AdminTaskReport_model->getAllUserByLeaderLogin();
        $data['userByLogin']=$this->AdminTaskReport_model->getUserByLogin();
        $this->load->view('common/header_view',$data);
		$this->load->view('taskmanagement/AdminTaskReport_view',$data);
        $this->load->view('common/footer_view');
	}

public function getRunningdata(){

    $user=$this->input->post('registrationId');
    $group=$this->AdminTaskReport_model->getloginleadergroup();
    $groplist='';

    if(!empty($group)){
        $groplist=array_column($group, 'fkgroupid');

    }
    $data['running']=$this->AdminTaskReport_model->getalltaskrunning($user,$groplist);
    // print_r($data['running']);
    $data['runnings']=$this->AdminTaskReport_model->getalltaskrunnings($user,$groplist);
    // $data['runningss']=$this->AdminTaskReport_model->getsearchdataindivisual();

    $array1 = $data['runnings'];
    $array2 = $data['running'];
    // $array3 = $data['runningss'];

    // Combining arrays
   $combinedArray = array_merge($array1, $array2);

   // Load view and pass the combined array to the view
   $data['combinedArray'] = $combinedArray;
   $i=1;
   // $a=1;

   foreach($combinedArray as $rw=>$value){

       $flag=$value->processflag;

       if($flag==1){
           $pf = "<span style='color:#663399;font-weight:bold;'>Running<span>";
       }
       else{
            $pf = "<span style='color:green;font-weight:bold;'>Completed</span>";
       }

       // for task type
       $task =$value->IndivisualtaskId;

       if($task==0){
           $a = "company assign";
       }
       else{
           $a = "Indiviusal";
       }

       $sd = $value->created_date;
       $cd = date('Y-m-d H:i:s');

       $date1 = date_create($sd);
       $date2 = date_create($cd);
       $diff = date_diff($date1, $date2);

       $daysDiff = $diff->days;
       $hoursDiff = $diff->h;
       $minutesDiff = $diff->i;

       $ddiff = "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";
       // for differance in start time and expected time
       $startdate = new DateTime($value->startdate);
       $expexteddatetime = new DateTime($value->expexteddatetime);
       $interval = $startdate->diff($expexteddatetime);
       $d =  $interval->format('%a days %h hours %i minutes %s seconds');

   echo "<tr>";
   echo "<td>".$i."</td>";
   echo "<td>".$pf."</td>";
   echo "<td>".$value->registrationId."</td>";
   echo "<td>".$value->fname."</td>";
   echo "<td>".$a."</td>";
   echo "<td>".$value->taskname."</td>";
   
   echo "<td>".$value->created_date."</td>";
   echo "<td>".$value->startdate."</td>";
   echo "<td>".$value->expexteddatetime."</td>";
   echo "<td>".date('Y-m-d H:i:s')."</td>";

   echo "<td>".$d."</td>";
   echo "<td>".$ddiff."</td>";
   $i++;
   echo "</tr>"; 
    }
}

    public function getcompleteddata(){
        $user=$this->input->post('registrationId');
        $group=$this->AdminTaskReport_model->getloginleadergroup();
    $groplist='';

    if(!empty($group)){
        $groplist=array_column($group, 'fkgroupid');

    }


        $data['complete']=$this->AdminTaskReport_model->getalltaskcompleted($user,$groplist);
        $data['completes']=$this->AdminTaskReport_model->getalltaskcompletedindivisual($user,$groplist);
        // $data['completess']=$this->AdminTaskReport_model->getsearchdataown();

        $array1 = $data['completes'];
        $array2 = $data['complete'];
        // $array3 = $data['completess'];

        $completedArray = array_merge($array1, $array2);
        $data['completed'] = $completedArray;

   $i=1;
   foreach( $data['completed']  as $rw=>$value){
    // print_r($data['completes']);
       $flag=$value->processflag;
       if($flag==1){
           $pf = "<span style='color:#663399;font-weight:bold;'>Running<span>";
       }
       else{
            $pf = "<span style='color:rgb(43, 193, 86);font-weight:bold;'>Completed</span>";
       }

       // for task type
       $task =$value->IndivisualtaskId;
       if($task==0){
           $a = "company assign";
       }
       else{
           $a = "Indiviusal";
       }
       // for difference
       $expexteddatetime = new DateTime($value->expexteddatetime);
       $startdate = new DateTime($value->enddate);

       $diff_interval = $startdate->diff($expexteddatetime);

       $End_com=  $diff_interval->format('%a days %h hours %i minutes %s seconds');

       $date1 = date_create($value->startdate);
       $date2 = date_create($value->enddate);
       $diff = date_diff($date1, $date2);

       $daysDiff = $diff->days;
       $hoursDiff = $diff->h;
       $minutesDiff = $diff->i;

       $days_diff = "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";
       echo "<tr>";  
       echo "<td>".$i."</td>";
       echo "<td>".$pf."</td>";
       echo "<td>".$value->registrationId."</td>";
       echo "<td>".$value->fname."</td>";
        // show task type
       echo "<td>".$a."</td>";
       echo "<td>".$value->taskname."</td>";
       echo "<td>".$value->startdate."</td>";
       echo "<td>".$value->expexteddatetime."</td>";
       echo "<td>".$value->enddate."</td>";
       echo "<td>".$End_com."</td>";
       echo "<td>".$days_diff."</td>";
   $i++;
   echo "</tr>";                        
   }
//    print_r(json_encode($data));
    }


    public function getpendingdata(){
        $user=$this->input->post('registrationId');
        $group=$this->AdminTaskReport_model->getloginleadergroup();
    $groplist='';

    if(!empty($group)){
        $groplist=array_column($group, 'fkgroupid');

    }

        $data['pending']=$this->AdminTaskReport_model->getalltaskpending($user,$groplist);
    
        
        $i=1;
        foreach($data['pending'] as $rw=>$value){
    
            $flag=$value->processflag;
    
            if($flag==0){
                $pf = "<span style='color:#f31504;font-weight:bold;'>Pending</span>";
            }
            else{
                 $pf = "<span style='color:#663399;font-weight:bold;'>Running<span>";
            }
    
            $sdate = $value->created_date;
            $cdate= date('Y-m-d H:i:s');
            $diffData = abs(strtotime($sdate) - strtotime($cdate));
            $daysDiff = floor($diffData / (60*60*24));
            $hoursDiff = floor(($diffData - $daysDiff * 60*60*24) / (60*60));
            $minutesDiff = floor(($diffData - $daysDiff * 60*60*24 - $hoursDiff * 60*60) / 60);
            $daysDiff =  "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";
            echo "<tr>";  
            echo "<td>".$i."</td>";
            echo "<td>".$pf."</td>";
            echo "<td>".$value->registrationId."</td>";
            echo "<td>".$value->fname."</td>";
            echo "<td>".$value->taskname."</td>";
            echo "<td>".$value->created_date."</td>";
            echo "<td>".date('Y-m-d')."</td>";
            echo "<td>".$daysDiff."</td>";
            $i++;
            echo "</tr>";                        
            }
       }

    public function showUserDetails(){
        $user=$this->input->post('registrationId');
        $data=$this->AdminTaskReport_model->getOneUser($user);
        echo json_encode($data);
        // echo "<pre>";
        //     print_r($data);

    }
}
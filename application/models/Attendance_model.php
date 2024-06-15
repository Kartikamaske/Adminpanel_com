<?php
  class Attendance_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }

      public function getallAttendance(){
        $user_id= $this->session->userdata('registrationId');
        $this->db->select('registration_master.*,attendance_master.*,DATE_FORMAT(startdate,"%d-%m-%y") as startdate,DATE_FORMAT(enddate,"%d-%m-%y") as enddate,DATE_FORMAT(starttime, "%h:%i:%s %p")as starttime,DATE_FORMAT(endtime, "%h:%i:%s %p")as endtime');
        $this->db->join('registration_master','attendance_master.fkregisterid = registration_master.registrationId','left');
        $this->db->where('registration_master.registrationId',$user_id);
        $this->db->from('attendance_master');
        $this->db->order_by('attendId',"desc");
        $query = $this->db->get();
        return $query->result();
      }

      public function getallAttendanceById($attendId)
      {
            
               $this->db->select('attendance_master.*');
               $this->db->from('attendance_master');
               $this->db->where('attendance_master.attendId',$attendId);

               $this->db->where('attendance_master.is_active','1');
               $query = $this->db->get();
               return $query->result();
      }

      public function getallUser()
      {      
              $user_id= $this->session->userdata('registrationId');
               $this->db->select('registration_master.*');
               $this->db->from('registration_master');
              //  $this->db->where('registration_master.is_active','1');
               $this->db->where('registration_master.registrationId',$user_id);
               $this->db->order_by("registration_master.registrationId", "desc"); 
 
               $query = $this->db->get();
               return $query->result();
              
      }

      public function checkdt($startdate,$registrationId) 
      {
            $this->db->select('*');
            $this->db->where('attendance_master.startdate',$startdate);
            $this->db->where('attendance_master.fkregisterid',$registrationId);
            $query=$this->db->get('attendance_master');
              if($query->num_rows()>0)
              {
                return $query->result();
              }else
              {
                return false;
              }
        }

      public function checkFlag($enddate,$registrationId){

        $this->db->select('attendance_master.*');
        $this->db->where('attendance_master.enddate',$enddate);
        $this->db->where('attendance_master.fkregisterid',$registrationId);
          // $i=$this->db->where('attendance_master.attendFlag','1');
          $query=$this->db->get('attendance_master');
            return $query->result();

            // if($query->num_rows()>0)
            //   {
            //     return $query->result();
            //   }else
            //   {
            //     return false;
            //   }
         
          
      }

      // public function checkFlag($attendId){
      //   $this->db->select('attendance_master.*');
      //     // $this->db->from('attendance_master');
      //     $this->db->where('attendance_master.attendId',$attendId);
      //     $this->db->where('attendance_master.startdate',$startdate);
      //     $i=$this->db->where('attendance_master.attendFlag','0');
          
      //     if(!$i){
      //       $query = $this->db->get();
      //       return $query->result();
      //     }else{
      //       return false;
      //     }

        //   $this->db->where('attendance_master.attendFlag','0');
        //   $query=$this->db->get('attendance_master');
        //   if($query->num_rows()>0)
        //   {
        //     return $query->result();
        //   }
        // else
        //   {
        //     return false;
        //   }
          
      // }

     

      // public function checkDate($startdate){

      //   $this->db->select('attendance_master.*');
      //   $this->db->from('attendance_master');
      //   $chDate=$this->db->where('attendance_master.startdate',$startdate);
      //   if(!$chDate){
      //     $query = $this->db->get();
      //     return $query->result();
      //   }else{
      //     return false;
      //   }
      // }


      
      // public function checkFlag($attendId){
      //   $this->db->select('attendance_master.*');
      //   $this->db->from('attendance_master');
      //   $this->db->where('attendance_master.attendFlag',$attendFlag);
      //   $query=$this->db->get('attendance_master');
		  // //echo "no of rows".$query->num_rows();
			//   if($query->num_rows()>0)
			// 	  {
      //      echo 1;
			// 		  return $query->result();
      //       // return false;
			// 	  }
			//   else
			// 	  {
      //       echo 2;
			// 		  return false;
			// 		  // return $query->result();

			// 	  }

      //   // $query = $this->db->get();
      //   // return $query->result();

      // }

//       public function check_end($enddate,$endtime) {
//         $this->db->select('*');
//         $this->db->where('enddate,endtime',$enddate,$endtime);
//         $query = $this->db->get('attendance_master');
//         $data = $query->row();
//         if($query->num_rows() == 1) {
//             return $data->attendId;
//         } else {
//             return false;
//         }
//    }

//    public function isAttendanceEnded($attendFlag) {
//     $query = $this->db->get_where('users', array('email' => $email));
//     return $query->num_rows() > 0;
// }

    }
    ?>
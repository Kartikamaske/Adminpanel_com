<?php
  class Addnewsong_model extends CI_Model {
    
    public function __construct()
      {
          $this->load->database();
      }


     
  
     public function getallSong()
     {      
      
             $this->db->select('song_master.*');

            //  $this->db->join('country_master','song_master.fkcountry  = country_master.countryId','left');
             $this->db->from('song_master');
             $this->db->where('song_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }

    //    Edit 
     public function getallSongByid($songId)
     {   
       $this->db->select('song_master.*,TIME_FORMAT
       (song_master.duration,"%H:%i" ) as duration');
       $this->db->from('song_master');
       $this->db->where('song_master.songId',$songId);
       $this->db->where('song_master.is_active','1');
       $query = $this->db->get();
       return $query->result();
   
     }


    //    get all registration

    public function getallUsers()
    {      
     
            $this->db->select('registration_master.*');

           //  $this->db->join('country_master','song_master.fkcountry  = country_master.countryId','left');
            $this->db->from('registration_master');
            $this->db->where('registration_master.is_active','1');
           //  $this->db->order_by("student_master.id", "desc"); 
             $query = $this->db->get();
             return $query->result();
            
    }
}
?>
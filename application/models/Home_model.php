<?php
  class Home_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
   

      public function getallPlayList()
      {      
       
              $this->db->select('addplaylist_master.*,song_master.musician,song_master.songName,song_master.photo,song_master.audio,song_master.songId');
      $this->db->join('song_master','addplaylist_master.fksongId  = song_master.songId','left');

 
              $this->db->from('addplaylist_master');
              $this->db->where('addplaylist_master.is_active','1');
              $this->db->order_by("addplaylist_master.playListId", "desc"); 
              $this->db->limit(12);
 
               $query = $this->db->get();
               return $query->result();
              
      }

      
      public function getallRecentPlayList()
      {      
       
              $this->db->select('recentplaylist_master.*,song_master.musician,song_master.songName,song_master.songId,song_master.photo,song_master.audio,song_master.singer');
      $this->db->join('song_master','recentplaylist_master.fksongId  = song_master.songId','left');

 
              $this->db->from('recentplaylist_master');
              $this->db->where('recentplaylist_master.is_active','1');
              $this->db->order_by("recentplaylist_master.RecentplayListId", "desc"); 
              $this->db->limit(15);
 
               $query = $this->db->get();
               return $query->result();
              
      }


      public function getallSong()
      {      
       
              $this->db->select('song_master.*');
 
              $this->db->from('song_master');
              $this->db->where('song_master.is_active','1');
 
               $query = $this->db->get();
               return $query->result();
              
      }

      public function getallTopSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','1');

        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }


     
      public function getallGenresSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','2');
        // $this->db->where('song_master.language','1');


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }

      public function getallGenresSongPop()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','3');


        $this->db->where('song_master.is_active',1);
        $this->db->order_by("song_master.songId", "desc"); 
        $this->db->limit(4);
            $query = $this->db->get();
        return $query->result();
        
      }

      public function getallGenresDanceSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','4');
        $this->db->order_by("song_master.songId", "desc"); 
        $this->db->limit(4);


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }

      public function getallGenresRockSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','5');
        $this->db->order_by("song_master.songId", "desc"); 
        $this->db->limit(4);


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }

      public function getallGenresDiscoSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','6');
        $this->db->order_by("song_master.songId", "desc"); 
        $this->db->limit(4);


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }

      public function getallGenresRomanticSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','7');
        $this->db->order_by("song_master.songId", "desc"); 
        $this->db->limit(4);


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }



    



     public function getallGenresHindiSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','2');
        $this->db->where('song_master.language','1');


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }

      public function getallGenresEnglishSong()
      {
        $this->db->select('song_master.songId,song_master.photo,song_master.songName,song_master.singer,song_master.fksongtype,,song_master.audio');
  
        
        $this->db->from('song_master');
        $this->db->where('song_master.fksongtype','2');
        $this->db->where('song_master.language','2');


        $this->db->where('song_master.is_active',1);
            $query = $this->db->get();
        return $query->result();
        
      }
    }

    ?>
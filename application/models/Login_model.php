<?php
class Login_model extends CI_Model {

    
  public function __construct()
  {
    $this->load->database();
  }

  public function login($username,$password)
		{
			$this->db->select('username,password');
			$this->db->where('username',$username);
			$this->db->where('password',$password );
			$query=$this->db->get('registration_master');
				//echo "no of rows".$query->num_rows();
					if($query->num_rows()>0)
						{
							return $query->result();
						}
					else
						{
							return false;
						}
		}


		public function AdminLogin($Name,$password)
		{
			$this->db->select('Name,password');
			$this->db->where('Name',$Name);
			$this->db->where('password',$password );
			$query=$this->db->get('login_master');
				//echo "no of rows".$query->num_rows();
					if($query->num_rows()>0)
						{
							return $query->result();
						}
					else
						{
							return false;
						}
		}
     


}
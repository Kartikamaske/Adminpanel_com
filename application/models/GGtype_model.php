<?php
class GGtype_model extends CI_model{


    public function getgroupType(){
        
        $groupType = $this->db->get('group_master')->result_array();

        return $groupType;
    }



    public function getgroup($groupid)
    {
        $this->db->where('states',$groupid);
        $states = $this->db->get('states')->result_array();

        // echo $this->db->last_query();
        return $states;
    }
}
<?php
class Modhome extends CI_Model{
    
    
    public function addNewUser($data)
    {
        return $this->db->insert('crud',$data);
    }
}
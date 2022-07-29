<?php
class Modhome extends CI_Model{
    
    
    public function addNewUser($data)
    {
        return $this->db->insert('crud',$data);
    }

    public function checkstudent($contact)
    {
        return $this->db->get_where('crud',array('contact'=>$contact));
    }

    public function getAllRecords()
    {
       return $this->db->get('crud');
    }

    public function checkUserId($id)
    {
       return $this->db->get_where('crud',array('id'=>$id));
    }

    public function updateUser($data , $uid)
    {
        $this->db->where('id',$uid);
       return $this->db->update('crud',$data);
    }
}
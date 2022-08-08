<?php
class Modhome extends CI_Model
{


    public function addNewUser($data)
    {
        return $this->db->insert('crud', $data);
    }

    public function checkuser($contact)
    {
        return $this->db->get_where('crud', array('contact' => $contact));
    }

    public function getAllRecords($limit,$offset)
    {
        $this->db->limit($limit,$offset);
        return $this->db->get('crud');
    }

    public function checkUserId($id)
    {
        return $this->db->get_where('crud', array('id' => $id));
    }

    public function updateUser($data, $uid)
    {
        $this->db->where('id', $uid);
        return $this->db->update('crud', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('crud',);
    }
    public function getTotalRows()
    {
        return $this->db->get('crud')->num_rows();
    }
}

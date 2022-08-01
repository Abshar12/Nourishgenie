<?php

class Home extends CI_Controller{

    public function index(){
        $this->load->view('welcome');
    }

        public function newUser()
        {
            $data['name'] = $this->input->post('name',true);
            $data['age'] = $this->input->post('age',true);
            $data['contact'] = $this->input->post('contact',true);
            $data['country'] = $this->input->post('country',true);
            $data['state'] = $this->input->post('state',true);
            $data['city'] = $this->input->post('city',true);
            
            $results = $this->modhome->checkuser($data['contact']);

            if ($results->num_rows()>0){
                $this->session->set_flashdata('message','This student with contact no:  '.$data['contact'] . ' already exist');
                redirect(uri:'home/allRecords');
            }
            else
            {
                $result = $this->modhome->addNewUser($data);

                if ($result)   
                {
                    $this->session->set_flashdata('message','Successfully inserted');
                    redirect(uri:'home/allRecords');
           
                }

                else
                {
                    $this->session->set_flashdata('message','Some error occured. Please try again after some time');
                    redirect(uri:'home/allRecords');
            
                }
            }
        }

    public function allRecords()
    {
        $data['allRecords'] = $this->modhome->getAllRecords();
        $this->load->view('allRecords',$data);
    }

    public function update($id = null)
    {
        if (isset($id) && !empty($id))
            
        {
           $data['records'] = $this->modhome->checkUserId($id);
           if ($data['records']->num_rows() > 0)
           {
                $this->load->view('Edituser',$data);
           }
           else{
            $this->session->set_flashdata('message','Recordnot available check id and try again');
            redirect(uri:'home/allRecords');
           }
        }

        else
        {
            $this->session->set_flashdata('message','Id is required');
            redirect(uri:'home/allRecords');
        }
    }

    public function updateUser()
    {
      $data['name'] = $this->input->post('name',true);
      $data['age'] =  $this->input->post('age',true);
      $data['contact'] =  $this->input->post('contact',true);
      $data['country'] =  $this->input->post('country',true);
      $data['state'] =  $this->input->post('state',true);
      $data['city'] =  $this->input->post('city',true);
      $uid  = $this->input->post('uid',true);

      if (!empty($data['name']) && !empty($data['age']) && !empty($data['contact']) && !empty($data['country']) && !empty($data['state']) && !empty($data['city']) &&!empty($uid))
      {
        $updated = $this->modhome->updateUser($data,$uid);
        if ($updated)
        {
            $this->session->set_flashdata('message','we have successfully updated your record');
            redirect(uri:'home/allRecords');
        }
        else
        {
            $this->session->set_flashdata('message','we cannot update the record right now, please try again after some time');
            redirect(uri:'home/allRecords');
        }
      }
      else
      {
        $this->session->set_flashdata('message','please check required fields and try again');
            redirect(uri:'home/allRecords');
      }

    
    }

    public function delete($id = null)
    {
        if ($id)
        {
           $urecord = $this->modhome->checkUserId($id);
           if ($urecord->num_rows() > 0)
           {
            $udelete = $this->modhome->deleteUser($id);
            if ($udelete)
            {
                $this->session->set_flashdata('message','Record deleted successfully');
            redirect(uri:'home/allRecords');
            }
            else
            {
                $this->session->set_flashdata('message','Cannot delete right now please try again after some time');
            redirect(uri:'home/allRecords');
            }
           }
           else
           {
            $this->session->set_flashdata('message','Record not found');
            redirect(uri:'home/allRecords');
           }
        }
        else
        {
            $this->session->set_flashdata('message','Something went wrong');
            redirect(uri:'home/allRecords');
        }
    }
        
    
        
}



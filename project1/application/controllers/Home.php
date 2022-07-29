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
            
            $results = $this->modhome->checkstudent($data['contact']);

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

<<<<<<< HEAD
    public function update($id = null)
=======
    public function update($id)
>>>>>>> 724fc32a714d9bdd819786e10bdca0db2f950c5e
    {
       if (isset($id) && !empty($id))
       {
           $data['records'] = $this->modhome->checkUserId($id);
           if ($data['records']->num_rows() > 0)
           {
            $this->load->view('editentry',$data);
           }
        else
        {
            $this->session->set_flashdata('message','Record is not available');
                    redirect(uri:'home/allRecords');
        }
       }
       else
       {
<<<<<<< HEAD
        $this->session->set_flashdata('message','Id is required');
        redirect(uri:'home/allRecords');
       }
    }

    public function updateUser()
    {
        $data['name'] = $this->input->post('name',true);
        $data['age'] = $this->input->post('age',true);
        $data['contact'] = $this->input->post('contact',true);
        $data['country'] = $this->input->post('country',true);
        $data['state'] = $this->input->post('state',true);
        $data['city'] = $this->input->post('city',true);
        $uid = $this->input->post('uid',true);

        if (!empty($data['name']) && !empty($data['age']) && !empty($data['contact']) && !empty($data['country']) && !empty($data['state']) && !empty($data['city']) && !empty($uid))
        {
           $updated = $this->modhome->updateUser($data , $uid);
           if ($updated)
           {
            $this->session->set_flashdata('message','We have successfully updated the records');
            redirect(uri:'home/allRecords');
           }
        }
        else
        {
            $this->session->set_flashdata('message','Sorry! Try again');
            redirect(uri:'home/allRecords');
        }
        
    }
=======
            echo 'id is required';
       }
    }
>>>>>>> 724fc32a714d9bdd819786e10bdca0db2f950c5e
}

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
            $data['city'] = $this->input->post('city',true);
            $result = $this->modhome->addnewUser($data);
            if ($result){
                echo 'successfully inserted';
            }
            else{
                echo 'Some error occured';
            }

        
        }
        }
    
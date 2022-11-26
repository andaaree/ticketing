<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class register extends CI_Controller{

        public function store()
        {
        
            $data=$this->input->post('login');
            $qry=$this->user->insert($data);
            $msg = "Success : data saved";
            if ($qry != 1) {
                $msg = "Error : Failed to save data";
                $this->login->set_flashdata('error', $msg);
                throw new Exception($msg, 500);
            }

            $this->login->set_flashdata('success', $msg);
            return redirect('/login');
        }

}


?>
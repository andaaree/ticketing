<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['login'] = "";
        return $this->load->view('template/login', $data);
    }

    public function lucu()
    {
        
    }
    public function login()
    {
        
        return $this->load->view('ticketing');
        
    }
    
}

/* End of file Dashboard.php */

?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_depart','depart');
    }
    

    public function index()
    {
        $data['departments'] = $this->depart->getAll();
        return $this->load->view('department/index', $data);
    }

    public function create()
    {
        return $this->load->view('department/create');
    }

    public function store()
    {
        $name = $this->input->post('dpName');
        $data = [
            'name' => $name
        ];
        $msg = "Success : data saved";
        $qry = $this->depart->insert($data);
        if ($qry != 1) {
            $msg = "Error : Failed to save data";
            $this->session->set_flashdata('error', $msg);
            throw new Exception($msg, 500);
        }
        $this->session->set_flashdata('success', $msg);
        return redirect('/department');
    }

    public function edit($id)
    {
        $data['dp'] = $this->depart->getbyid($id);
        return $this->load->view('department/edit', $data);
    }

    public function update($id)
    {
        $name=$this->input->post('dpname');
        $data=[
            'name' => $name];
        $qry=$this->depart->update($data,$id);
        $msg = "Success : data saved";
        $this->session->set_flashdata('success', $msg);
        return redirect('/department');
    } 

    public function delete($id)
    {
        $qry = $this->depart->delete($id);
        $msg = "Success : data saved";
        if ($qry != 1) {
            $msg = "Error : Failed to save data";
            $this->session->set_flashdata('error', $msg);
            throw new Exception($msg, 500);
        }
        $this->session->set_flashdata('success', $msg);
        return redirect('/department');
    }

}

/* End of file Department.php */

?>
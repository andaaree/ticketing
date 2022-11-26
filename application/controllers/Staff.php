<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_staff','staff');
        
    }
    


    public function index()
    {
        $data['staff'] = $this->staff->getAll();
        return $this->load->view('staff/index', $data);
    }

    public function create()
    {
        # code...
        return $this->load->view('staff/create');
        
    } 
    public function store()
    {
        # code...
        $nama=$this->input->post('nama');
        $jabatan=$this->input->post('jabatan');
        $data=[
            'nama' => $nama,
            'jabatan' => $jabatan
        ];
        $qry=$this->staff->insert($data);
        $msg = "Success : data saved";
        if ($qry != 1) {
            $msg = "Error : Failed to save data";
            $this->session->set_flashdata('error', $msg);
            throw new Exception($msg, 500);
        }
        $this->session->set_flashdata('success', $msg);
        return redirect('/staff');
    }

    public function edit($id)
    {
        # code...
        $data['staff'] = $this->staff->getbyid($id);
        return $this->load->view('staff/edit', $data);
        
    }
    public function update($id)
    {
        # code...
        $nama=$this->input->post('nama');
        $jabatan=$this->input->post('jabatan');
        $data=[
            'nama' => $nama,
            'jabatan' => $jabatan
        ];
        $qry=$this->staff->update($data,$id);
        $msg = "Success : data saved";
        $this->session->set_flashdata('success', $msg);
        return redirect('/staff');
    }
    public function delete($id)
    {
        $qry = $this->staff->delete($id);
        $msg = "Success : data saved";
        if ($qry != 1) {
            $msg = "Error : Failed to save data";
            $this->session->set_flashdata('error', $msg);
            throw new Exception($msg, 500);
        }
        $this->session->set_flashdata('success', $msg);
        return redirect('/staff');
    }
}

/* End of file Staff.php */

?>
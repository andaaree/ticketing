<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Ticketing extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('m_ticket','ticket');
        $this->load->model('m_depart','depart');
        $this->load->model('m_staff','staff');

        $this->table = "ticketing";
    }
   
    public function index()
    {
        $data['ticket'] = $this->ticket->getUnsolved();
        // return var_dump($data);
        return $this->load->view('ticket/index', $data);
    }

    public function all()
    {
        $data['ticket'] = $this->ticket->getAll();
        return $this->load->view('ticket/index', $data);
    }

    public function create()
    {
        $data['depart'] = $this->depart->getAll();
        $data['staff'] = $this->staff->getAll();
        return $this->load->view('ticket/create',$data);
    }
    public function store()
    {
        $tempdate = strtotime($this->input->post('date'));
        $date = date("Y-m-d",$tempdate);
        $username = $this->input->post('username');
        $dep_id = $this->input->post('dep_id');
        $location = $this->input->post('location');
        $detail_case = $this->input->post('detail_case');
        $suggest = $this->input->post('suggest');
        $staff_id = $this->input->post('staff_id');
        $tempstart =  strtotime($this->input->post('date')." ".$this->input->post('starttime'));
        $tempend = strtotime($this->input->post('date')." ".$this->input->post('endtime'));
        $starttime = date("Y-m-d H:i:s",$tempstart);
        $endtime = date("Y-m-d H:i:s",$tempend);
        $status = $this->input->post('status');
        $data = [
            'date' => $date,
            'username' => $username,
            'dep_id' => $dep_id,
            'location' => $location,
            'detail_case' => $detail_case,
            'suggest' => $suggest,
            'staff_id' => $staff_id,
            'starttime' => $starttime,
            'endtime' => $endtime,
            'status' => $status
        ];
        $msg = "Success : data saved";
        $qry = $this->ticket->insert($data);
        if ($qry != 1) {
            $msg = "Error : Failed to save data";
            $this->session->set_flashdata('error', $msg);
            throw new Exception($msg, 500);
        }
        $this->session->set_flashdata('success', $msg);
        return redirect('/ticketing');
    }

    public function edit($id)
    {
        $data['t'] = $this->ticket->getbyid($id);
        $data['depart'] = $this->depart->getAll();
        $data['staff'] = $this->staff->getAll();
        // return var_dump($data);
        return $this->load->view('ticket/edit', $data);
    }

    public function update($id)
    {
        $tempdate = strtotime($this->input->post('date'));
        $date = date("Y-m-d",$tempdate);
        $username = $this->input->post('username');
        $dep_id = $this->input->post('dep_id');
        $location = $this->input->post('location');
        $detail_case = $this->input->post('detail_case');
        $suggest = $this->input->post('suggest');
        $staff_id = $this->input->post('staff_id');
        $tempstart =  strtotime($this->input->post('date')." ".$this->input->post('starttime'));
        $tempend = strtotime($this->input->post('date')." ".$this->input->post('endtime'));
        $starttime = date("Y-m-d H:i:s",$tempstart);
        $endtime = date("Y-m-d H:i:s",$tempend);
        $status = $this->input->post('status');
        $data = [
            'date' => $date,
            'username' => $username,
            'dep_id' => $dep_id,
            'location' => $location,
            'detail_case' => $detail_case,
            'suggest' => $suggest,
            'staff_id' => $staff_id,
            'starttime' => $starttime,
            'endtime' => $endtime,
            'status' => $status
        ];
        $qry=$this->ticket->update($data,$id);
        $msg = "Success : data saved";
        $this->session->set_flashdata('success', $msg);
        return redirect('/ticketing');
    } 

    public function delete($id)
    {
        $qry = $this->ticket->delete($id);
        $msg = "Success : data removed";
        if ($qry != 1) {
            $msg = "Error : Failed to remove data";
            $this->session->set_flashdata('error', $msg);
            throw new Exception($msg, 500);
        }
        $this->session->set_flashdata('success', $msg);
        return redirect('/ticketing');
    }
    public function history()
    {
        $data['history'] = $this->ticket->history();

        return $this->load->view('ticket/his', $data);
    }
    public function solve($id)
    {
        $data = [
            'endtime' => now(),
            'status' => "Solved"
        ];
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        return redirect('/ticketing');
    }

    public function wha($id)
    {
        $t = $this->ticket->getbyid($id);
        $td = date("m/d/Y", strtotime($t->date));
        $tst = date("h:i A", strtotime($t->starttime));
        $format = "*IT Support Request*
Date                     : $td
Nama User           : $t->username
Dept                     : $t->name
Location               : $t->location
Detail case           : $t->detail_case
Suggest Action    : $t->suggest
Delegation           : $t->nama
Start time             : $tst
Status                   : $t->status
        ";
        $url = urlencode($format);
        $wa = "https://wa.me/?text=$url";
        return redirect($wa);
    }
}

?>
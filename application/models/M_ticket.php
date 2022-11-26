<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_ticket extends CI_Model {
    
    public function getUnsolved()
    {
        $this->db->select('*, ticketing.id as tid');
        $this->db->where('status !=','Solved');
        $this->db->join('department','department.id = dep_id');
        $this->db->join('staff','staff.id = staff_id');
        $qry = $this->db->get($this->table);
        return $qry->result_array();
    }

    public function getAll()
    {
        $this->db->select('*, ticketing.id as tid');
        $this->db->join('department','department.id = dep_id');
        $this->db->join('staff','staff.id = staff_id');
        $qry = $this->db->get($this->table);
        return $qry->result_array();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }
    public function getbyid($id)
    {
        $this->db->select('name,nama,ticketing.id as tid,department.id as did, staff.id as sid,date,username,location,detail_case,suggest,starttime,endtime,status');
        
        $this->db->where($this->table.".id", $id);
        $this->db->join('department','department.id = dep_id');
        $this->db->join('staff','staff.id = staff_id');
        $qry = $this->db->get($this->table);
        return $qry->row();
    }
    public function update($data,$id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->table);
        $res = $this->db->affected_rows();
        return $res;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        $res = 
        $this->db->affected_rows();
        return $res;
    }

    public function history()
    {
        $this->db->select('*, ticketing.id as tid');
        $this->db->where('status','Solved');
        $this->db->join('department','department.id = dep_id');
        $this->db->join('staff','staff.id = staff_id');
        $qry = $this->db->get($this->table);
        return $qry->result_array();
    }
}

/* End of file M_ticket.php */
?>
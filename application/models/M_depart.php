<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_depart extends CI_Model {

    public function getAll()
    {
        $qry = $this->db->get('department');
        return $qry->result_array();
    }
    public function getbyid($id)
    {
        # code...
        $this->db->where(['id'=> $id]);
        $qry = $this->db->get('department');
        return $qry->row();
    }
    public function insert($data)
    {
        $this->db->insert('department', $data);
        return $this->db->affected_rows();
    }

    public function update($data,$id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('department', $data);
        $res = $this->db->affected_rows();
        return $res;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('department');
        return $this->db->affected_rows();        
    }

}

/* End of file M_depart.php */

?>
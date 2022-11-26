<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_staff extends CI_Model {

public function getAll()

{
    # code...
    $qry= $this->db->get('staff');
    return $qry->result_array();
    
    
}


public function getbyid($id)

{
    # code...
    $qry = $this->db->where('id', $id)
    ->get('staff');
    return 
    $qry->row();
}
public function insert($data)
{
    $this->db->insert('staff', $data);
    $res = $this->db->affected_rows();
    return $res;
}

public function update($data, $id)
{
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('staff');
    $res = $this->db->affected_rows();
    return $res;
}
public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('staff');
        return $this->db->affected_rows();        
    }
}

/* End of file m_staff.php */

?>
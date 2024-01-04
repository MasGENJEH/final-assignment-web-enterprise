<?php

class Model_hitung extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getHitung($tipe = null, $id = null)
    {
        //$results = array();
        if ($id){
            $sql = "select id, panjang, lebar, tinggi, hasil from code_igniter_3 where id = ? and type = ? ";
            $query = $this->db->query($sql,array($id, $tipe));
            return $query->row_array();
        }

        $sql = "select id, panjang, lebar, tinggi, hasil from code_igniter_3 where type = ? ";
        $query = $this->db->query($sql,array($tipe));
        return $query->result_array();
    }
    

    public function create($data)
    {
        if ($data){
            $insert = $this->db->insert('code_igniter_3', $data);
            $id = $this->db->insert_id();

            if ($insert == true)
            {
                $return = true;
            }
            else
            {
                $return = false;
            }
            return $return;
        }
    }

    public function update($data, $id)
    {
        if ($data && $id){
            $this->db->where('id', $id);
            $update = $this->db->update('code_igniter_3', $data);
            return ( $update == true ) ? true : false;
        }
    }

    public function delete($id)
    {
        $this->db->delete('code_igniter_3', ['id' => $id]);
    }

}


; ?>
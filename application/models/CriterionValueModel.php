<?php

class CriterionValueModel extends CI_Model
{
    private $_table = "nilai_kriteria";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function getWithBuilder($id)
    {
        return $this->db->query("SELECT nilai_kriteria.*, kriteria.kode_kriteria AS kode_kriteria FROM nilai_kriteria JOIN kriteria ON nilai_kriteria.id_kriteria = kriteria.id WHERE nilai_kriteria.id_kriteria = $id");
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }  
    
    public function getByIds($id)
    {
        $this->db->where('criteria_id', $id);
        return $this->db->get($this->_table);
    }      

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }    

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    }            
}
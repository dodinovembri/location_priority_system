<?php

class AlternativeValueModel extends CI_Model
{
    private $_table = "nilai_alternatif";

    public function get()
    {
    	return $this->db->get($this->_table);
    }

    public function getWithBuilder()
    {
        return $this->db->query("SELECT nilai_alternatif.*, alternatif.kode_alternatif AS kode_alternatif, alternatif.nama_alternatif AS nama_alternatif FROM nilai_alternatif JOIN alternatif ON nilai_alternatif.id_alternatif = alternatif.id");
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
    
    public function getByCriteriaId($id)
    {
        $this->db->where('id_kriteria', $id);
        return $this->db->get($this->_table);
    }
    
    public function getByIds($id)
    {
        $this->db->where('employee_id', $id);
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
    
    public function destroyAllById($id)
    {
        $this->db->where('employee_id', $id);
        return $this->db->delete($this->_table);
    }    

    public function destroyAllByCriteria($criteria_id, $employee_id)
    {
        $this->db->where('criteria_id', $criteria_id);
        $this->db->where('employee_id', $employee_id);
        return $this->db->delete($this->_table);
    }

    public function destroy_by_alternative($id)
    {
        return $this->db->query("DELETE FROM nilai_alternatif WHERE id_alternatif = $id");
    }   
}
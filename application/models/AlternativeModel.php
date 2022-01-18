<?php

class AlternativeModel extends CI_Model
{
    private $_table = "alternatif";

    public function get($status = NULL)
    {
        if (isset($status)) {
            $this->db->where('status', $status);
        }
        return $this->db->get($this->_table);
    }

    public function get2($status = NULL)
    {
        return $this->db->query("SELECT * FROM `alternatif` where id IN (SELECT id_alternatif from nilai_alternatif)");
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

    public function getByEmail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get($this->_table);
    }

    public function getWithJoinById($id)
    {
        $this->db->select('nilai_alternatif.*');
        $this->db->select('kriteria.*');
        $this->db->select('nilai_kriteria.*');
        $this->db->select('nilai_alternatif.nilai as nilai_alternatif');
        $this->db->from('nilai_alternatif');
        $this->db->join('kriteria', 'nilai_alternatif.id_kriteria = kriteria.id');
        $this->db->join('nilai_kriteria', 'nilai_alternatif.id_nilai_kriteria = nilai_kriteria.id');
        $this->db->where('nilai_alternatif.id_alternatif', $id);
        return $query = $this->db->get();
    }

    public function getWithJoinAll($id)
    {
        $this->db->select('nilai_alternatif.*');
        $this->db->select('kriteria.*');
        $this->db->select('nilai_kriteria.*');
        $this->db->select('nilai_alternatif.nilai as nilai_alternatif');
        $this->db->from('nilai_alternatif');
        $this->db->join('kriteria', 'nilai_alternatif.id_kriteria = kriteria.id');
        $this->db->join('nilai_kriteria', 'nilai_alternatif.id_nilai_kriteria = nilai_kriteria.id');
        return $query = $this->db->get();
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
    public function check_auth($username, $password)
    {
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        return $this->db->get($this->_table);
    }

    public function count()
    {
        return $this->db->count_all($this->_table);
    }

    public function findCriteria($nilai, $id_kriteria)
    {
        return $this->db->query("SELECT * FROM nilai_kriteria WHERE $nilai BETWEEN nilai_awal AND nilai_akhir AND id_kriteria = $id_kriteria");
    }
}

<?php

class RankingModel extends CI_Model
{

    public function getAlternativeValue()
    {
        return $this->db->query("SELECT nilai_alternatif.id_kriteria AS id_kriteria, SUM(POW(nilai_kriteria.nilai, 2)) AS nilai FROM nilai_alternatif JOIN nilai_kriteria  ON nilai_alternatif.id_nilai_kriteria = nilai_kriteria.id GROUP BY nilai_alternatif.id_kriteria");      
    }

    public function getWithJoinAll()
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

    public function getCriteriaAll()
    {
        return $this->db->get('kriteria');
    }

    public function countAlternative()
    {
        return $this->db->count_all('alternatif');
    }

    public function countAlternative2()
    {
        return $this->db->query("SELECT COUNT(id) as total FROM `alternatif` where id IN (SELECT id_alternatif from nilai_alternatif)")->row();
    }

    public function getAlternative()
    {
        return $this->db->get('alternatif');
    }

    public function getAlternativeValueList()
    {
        return $this->db->get('nilai_alternatif');
    }
}

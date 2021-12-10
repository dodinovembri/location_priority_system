<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('function');
        $this->load->model(['RankingModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        /**
         * 1. Define devider
         */
        $deviders = $this->RankingModel->getAlternativeValue()->result();

        $devider = [];
        foreach ($deviders as $key => $value) {
            $nilai = sqrt($value->nilai);
            $data = array('id_kriteria' => $value->id_kriteria, 'nilai' => $nilai);
            array_push($devider, $data);
        }
        $total_devider = count($devider);

        /**
         * 2. Devide all alternative with devider
         */
        $alternative_value = [];
        $alternative_values = $this->RankingModel->getWithJoinAll()->result();
        $i = 0;
        foreach ($alternative_values as $key => $value) {
            $result_devider = $value->nilai / $devider[$i]['nilai'];
            $data_alternative = array('id_alternatif' => $value->id_alternatif, 'hasil_bagi' => $result_devider);
            array_push($alternative_value, $data_alternative);
            $i++;
            if ($i == $total_devider) {
                $i = 0;
            }
        }

        /**
         * 3. time with weight
         */
        $alternative_after_multiple = [];
        $weight = $this->RankingModel->getCriteriaAll()->result();
        $total_weigth = count($weight);
        $j = 0;
        foreach ($alternative_value as $key => $value) {
            $multiplication_result = $value['hasil_bagi'] * $weight[$j]->bobot;
            $multiplication_data = array('id_alternatif' => $value['id_alternatif'], 'hasil_kali' => $multiplication_result);
            array_push($alternative_after_multiple, $multiplication_data);
            $j++;
            if ($j == $total_weigth) {
                $j = 0;
            }
        }

        /**
         * 4. Find ideal solution (A+) and (A-)
         */
        $total_alternative = $total_weigth;
        $k = 0;
        for ($i = 0; $i < $total_weigth; $i++) {
            for ($j = 0; $j < $total_alternative; $j++) {
                $alternative[$i][] = $alternative_after_multiple[0 + $k]['hasil_kali'];
                $k = $k + $total_alternative - 1;
            }
            $k = $i + 1;
        }

        foreach ($weight as $key => $value) {
            // A+
            if ($value->jenis_kriteria == "Cost") {
                $a_positive[] = min($alternative[$key]);
            } else {
                $a_positive[] = max($alternative[$key]);
            }

            // A-
            if ($value->jenis_kriteria == "Cost") {
                $a_negative[] = max($alternative[$key]);
            } else {
                $a_negative[] = min($alternative[$key]);
            }
        }

        /**
         * 4. Find solution (D+) and (D-)
         */
        $l = 0;
        $d_solution = [];
        $d_positive = 0;
        $d_negative = 0;
        $id_alternatif_before = '';
        foreach ($alternative_after_multiple as $key => $value) {
            $id_alternatif = $value['id_alternatif'];
            $hasil_kali = $value['hasil_kali'];

            if ($key == 0) {
                $id_alternatif_before = $id_alternatif;
                $d_positive = $d_positive + pow($hasil_kali - $a_positive[$l], 2);
                $d_negative = $d_negative + pow($hasil_kali - $a_negative[$l], 2);
            } else {
                if ($id_alternatif_before == $id_alternatif) {
                    $d_positive = $d_positive + pow($hasil_kali - $a_positive[$l], 2);
                    $d_negative = $d_negative + pow($hasil_kali - $a_negative[$l], 2);
                } else {
                    $d_positive_push = sqrt($d_positive);
                    $d_negative_push = sqrt($d_negative);
                    $data_push = array('id_alternatif' => $id_alternatif_before, 'd_positif' => $d_positive_push, 'd_negatif' => $d_negative_push);
                    array_push($d_solution, $data_push);
                    $id_alternatif_before = $id_alternatif;
                    $d_positive = 0;
                    $d_negative = 0;
                    $d_positive = $d_positive + pow($hasil_kali - $a_positive[$l], 2);
                    $d_negative = $d_negative + pow($hasil_kali - $a_negative[$l], 2);
                }
            }
            $l++;
            if ($l == ($total_alternative - 1)) {
                $l = 0;
            }
        }
        // Last record pushed
        $d_positive_push = sqrt($d_positive);
        $d_negative_push = sqrt($d_negative);
        $data_push = array('id_alternatif' => $id_alternatif_before, 'd_positif' => $d_positive_push, 'd_negatif' => $d_negative_push);
        array_push($d_solution, $data_push);

        /**
         * 4. Find preference result
         */
        $final_results = [];
        foreach ($d_solution as $key => $value) {
            $alternative_id = $value['id_alternatif'];
            $d_negative = $value['d_negatif'];
            $d_positive = $value['d_positif'];

            $final_result = $d_negative / ($d_negative + $d_positive);
            $final_push = array('id_alternatif' => $alternative_id, 'preferensi' => $final_result);
            array_push($final_results, $final_push);
        }

        /**
         * 5. Determine ranking
         */
        $n = count($final_results);
        // sort with buble sort
        for ($i = 0; $i < $n; $i++) {
            for ($j = $n - 1; $j > $i; $j--) {
                if ($final_results[$j]["preferensi"] > $final_results[$j - 1]["preferensi"]) {
                    $dummy = $final_results[$j];
                    $final_results[$j] = $final_results[$j - 1];
                    $final_results[$j - 1] = $dummy;
                }
            }
        }

        $data['final_results'] = $final_results;

        $this->load->view('templates/header');
		$this->load->view('ranking/index', $data);
        $this->load->view('templates/footer');
	}

	public function step()
	{
        /**
         * 1. Define devider
         */
        $deviders = $this->RankingModel->getAlternativeValue()->result();

        $devider = [];
        foreach ($deviders as $key => $value) {
            $nilai = sqrt($value->nilai);
            $data = array('id_kriteria' => $value->id_kriteria, 'nilai' => $nilai);
            array_push($devider, $data);
        }
        $total_devider = count($devider);

        /**
         * 2. Devide all alternative with devider
         */
        $alternative_value = [];
        $alternative_values = $this->RankingModel->getWithJoinAll()->result();
        $i = 0;
        foreach ($alternative_values as $key => $value) {
            $result_devider = $value->nilai / $devider[$i]['nilai'];
            $data_alternative = array('id_alternatif' => $value->id_alternatif, 'hasil_bagi' => $result_devider);
            array_push($alternative_value, $data_alternative);
            $i++;
            if ($i == $total_devider) {
                $i = 0;
            }
        }

        /**
         * 3. time with weight
         */
        $alternative_after_multiple = [];
        $weight = $this->RankingModel->getCriteriaAll()->result();
        $total_weigth = count($weight);
        $j = 0;
        foreach ($alternative_value as $key => $value) {
            $multiplication_result = $value['hasil_bagi'] * $weight[$j]->bobot;
            $multiplication_data = array('id_alternatif' => $value['id_alternatif'], 'hasil_kali' => $multiplication_result);
            array_push($alternative_after_multiple, $multiplication_data);
            $j++;
            if ($j == $total_weigth) {
                $j = 0;
            }
        }
        
        /**
         * 4. Find ideal solution (A+) and (A-)
         */
        $total_alternative = $total_weigth;
        $k = 0;
        for ($i = 0; $i < $total_weigth; $i++) {
            for ($j = 0; $j < $total_alternative; $j++) {
                $alternative[$i][] = $alternative_after_multiple[0 + $k]['hasil_kali'];
                $k = $k + $total_alternative - 1;
            }
            $k = $i + 1;
        }

        foreach ($weight as $key => $value) {
            // A+
            if ($value->jenis_kriteria == "Cost") {
                $a_positive[] = min($alternative[$key]);
            } else {
                $a_positive[] = max($alternative[$key]);
            }

            // A-
            if ($value->jenis_kriteria == "Cost") {
                $a_negative[] = max($alternative[$key]);
            } else {
                $a_negative[] = min($alternative[$key]);
            }
        }

        /**
         * 4. Find solution (D+) and (D-)
         */
        $l = 0;
        $d_solution = [];
        $d_positive = 0;
        $d_negative = 0;
        $id_alternatif_before = '';
        foreach ($alternative_after_multiple as $key => $value) {
            $id_alternatif = $value['id_alternatif'];
            $hasil_kali = $value['hasil_kali'];

            if ($key == 0) {
                $id_alternatif_before = $id_alternatif;
                $d_positive = $d_positive + pow($hasil_kali - $a_positive[$l], 2);
                $d_negative = $d_negative + pow($hasil_kali - $a_negative[$l], 2);
            } else {
                if ($id_alternatif_before == $id_alternatif) {
                    $d_positive = $d_positive + pow($hasil_kali - $a_positive[$l], 2);
                    $d_negative = $d_negative + pow($hasil_kali - $a_negative[$l], 2);
                } else {
                    $d_positive_push = sqrt($d_positive);
                    $d_negative_push = sqrt($d_negative);
                    $data_push = array('id_alternatif' => $id_alternatif_before, 'd_positif' => $d_positive_push, 'd_negatif' => $d_negative_push);
                    array_push($d_solution, $data_push);
                    $id_alternatif_before = $id_alternatif;
                    $d_positive = 0;
                    $d_negative = 0;
                    $d_positive = $d_positive + pow($hasil_kali - $a_positive[$l], 2);
                    $d_negative = $d_negative + pow($hasil_kali - $a_negative[$l], 2);
                }
            }
            $l++;
            if ($l == ($total_alternative - 1)) {
                $l = 0;
            }
        }
        // Last record pushed
        $d_positive_push = sqrt($d_positive);
        $d_negative_push = sqrt($d_negative);
        $data_push = array('id_alternatif' => $id_alternatif_before, 'd_positif' => $d_positive_push, 'd_negatif' => $d_negative_push);
        array_push($d_solution, $data_push);

        /**
         * 4. Find preference result
         */
        $final_results = [];
        foreach ($d_solution as $key => $value) {
            $alternative_id = $value['id_alternatif'];
            $d_negative = $value['d_negatif'];
            $d_positive = $value['d_positif'];

            $final_result = $d_negative / ($d_negative + $d_positive);
            $final_push = array('id_alternatif' => $alternative_id, 'preferensi' => $final_result);
            array_push($final_results, $final_push);
        }

        /**
         * 5. Determine ranking
         */
        $n = count($final_results);
        // sort with buble sort
        for ($i = 0; $i < $n; $i++) {
            for ($j = $n - 1; $j > $i; $j--) {
                if ($final_results[$j]["preferensi"] > $final_results[$j - 1]["preferensi"]) {
                    $dummy = $final_results[$j];
                    $final_results[$j] = $final_results[$j - 1];
                    $final_results[$j - 1] = $dummy;
                }
            }
        }

        $data['alternatives'] = $this->RankingModel->getAlternative()->result();
        $data['alternative_values'] = $this->RankingModel->getAlternativeValueList()->result();
        $data['devider'] = $devider;
        $data['alternative_values_normalized'] = $alternative_value;
        $data['weights'] = $weight;
        $data['alternative_after_multiple'] = $alternative_after_multiple;
        $data['a_positive'] = $a_positive;
        $data['a_negative'] = $a_negative;
        $data['d_solution'] = $d_solution;
        $data['final_results'] = $final_results;

        $this->load->view('templates/header');
		$this->load->view('ranking/step', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        //
    }

    public function store()
    {
        // 
    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

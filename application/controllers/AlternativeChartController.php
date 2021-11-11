<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeChartController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeValueModel', 'CriteriaModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['alternatives'] = $this->AlternativeValueModel->get()->result();
        // print_r(json_encode($data['alternatives']));
        // die;

        $this->load->view('templates/header');
		$this->load->view('alternative_chart/index', $data);
        $this->load->view('templates/footer');
	}
    
}
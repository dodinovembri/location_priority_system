<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeValueReportController extends CI_Controller {

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
        $data['alternative_values'] = $this->AlternativeValueModel->getWithBuilder()->result();
        $data['alternatives'] = $this->AlternativeModel->get()->result();
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative_value_report/index', $data);
        $this->load->view('templates/footer');
	}
    
}
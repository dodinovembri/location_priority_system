<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeValueController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeValueModel']);
    }

	public function index($id)
	{
        $data['alternative_values'] = $this->AlternativeValueModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative/value', $data);
        $this->load->view('templates/footer');
	}
}
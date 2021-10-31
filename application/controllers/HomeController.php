<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'CriteriaModel', 'UserModel']);
    }

	public function index()
	{
        $data['alternatives'] = $this->AlternativeModel->count();
        $data['criterias'] = $this->CriteriaModel->count();
        $data['users']     = $this->UserModel->count();

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }    
}
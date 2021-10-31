<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriterionValueController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['CriterionValueModel']);
    }

	public function index($id)
	{
        $criteria = array(
            'criteria_id' => $id
        );
        $this->session->set_userdata($criteria);

        $data['criterion_values'] = $this->CriterionValueModel->getWithBuilder($id)->result();

        $this->load->view('templates/header');
		$this->load->view('criterion_value/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('criterion_value/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $data = array(
            'id_kriteria' => $criteria_id,
            'keterangan' => $this->input->post('keterangan'),
            'nilai_awal' => $this->input->post('nilai_awal'),
            'nilai_akhir' => $this->input->post('nilai_akhir'),
            'nilai' => $this->input->post('nilai')
        );

        $this->CriterionValueModel->insert($data);
        $this->session->set_flashdata('success', "Data nilai kriteria berhasil ditambahkan!");
        return redirect("criterion_values/$criteria_id");
   
    }

    public function show($id)
    {
        $data['criterion_value'] = $this->CriterionValueModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criterion_value/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['criterion_value'] = $this->CriterionValueModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criterion_value/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $data = array(
            'keterangan' => $this->input->post('keterangan'),
            'nilai_awal' => $this->input->post('nilai_awal'),
            'nilai_akhir' => $this->input->post('nilai_akhir'),
            'nilai' => $this->input->post('nilai')
        );

        $this->CriterionValueModel->update($data, $id);
        $this->session->set_flashdata('success', "Data nilai kriteria berhasil diubah!");
        return redirect(base_url("criterion_values/$criteria_id"));      
    }

    public function destroy($id)
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $this->CriterionValueModel->destroy($id);
        $this->session->set_flashdata('success', "Data nilai kriteria berhasil dihapus!");
        return redirect(base_url("criterion_values/$criteria_id"));
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriteriaController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['CriteriaModel']);
    }

	public function index()
	{
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('criteria/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('criteria/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'kode_kriteria'   => $this->input->post('kode_kriteria'),
            'nama_kriteria'   => $this->input->post('nama_kriteria'),
            'jenis_kriteria'   => $this->input->post('jenis_kriteria'),
            'bobot' => $this->input->post('bobot'),
            'keterangan' => $this->input->post('keterangan')
        );

        $this->CriteriaModel->insert($data);
        $this->session->set_flashdata('success', "Data kriteria berhasil ditambahkan!");
        return redirect(base_url('criteria'));
    }

    public function show($id)
    {
        $data['criteria'] = $this->CriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criteria/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['criteria'] = $this->CriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criteria/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = array(
            'kode_kriteria'   => $this->input->post('kode_kriteria'),
            'nama_kriteria'   => $this->input->post('nama_kriteria'),
            'jenis_kriteria'   => $this->input->post('jenis_kriteria'),
            'bobot' => $this->input->post('bobot'),
            'keterangan' => $this->input->post('keterangan')
        );

        $this->CriteriaModel->update($data, $id);
        $this->session->set_flashdata('success', "Data kriteria berhasil diubah!");
        return redirect(base_url('criteria'));
    }

    public function destroy($id)
    {
        $this->CriteriaModel->destroy($id);
        $this->session->set_flashdata('success', "Data Kriteria berhasil dihapus!");
        return redirect(base_url('criteria'));
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeProfileController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['alternatives'] = $this->AlternativeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative_profile/index', $data);
        $this->load->view('templates/footer');
	}

    public function show($id)
    {
        $data['alternative'] = $this->AlternativeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('alternative_profile/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['alternative'] = $this->AlternativeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('alternative_profile/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $kode_alternatif = $this->input->post('kode_alternatif');
        $nama_alternatif = $this->input->post('nama_alternatif');
        $keterangan = $this->input->post('keterangan');
        $no_telepon = $this->input->post('no_telepon');
        $email = $this->input->post('email');

     
        $data = array(
            'kode_alternatif' => $kode_alternatif,
            'nama_alternatif' => $nama_alternatif,
            'keterangan' => $keterangan,
            'no_telepon' => $no_telepon,
            'email' => $email
        );

        $this->AlternativeModel->update($data, $id);

        $this->session->set_flashdata('success', "Data puskesmas berhasil diubah!");
        return redirect(base_url('alternative_profile'));
    }
    
}
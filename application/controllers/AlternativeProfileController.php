<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeProfileController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeValueModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->getByEmail($email)->row();
        $data['alternative'] = $alternative;
        $data['criteria_alternative'] = $this->AlternativeModel->getWithJoinById($alternative->id)->result();


        $this->load->view('templates/header');
		$this->load->view('alternative_profile/index', $data);
        $this->load->view('templates/footer');
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
        $kode_alternatif = $this->input->post('kode_alternatif');
        $nama_alternatif = $this->input->post('nama_alternatif');
        $keterangan = $this->input->post('keterangan');
        $no_telepon = $this->input->post('no_telepon');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $criteria_alternative = $this->input->post('criteria_alternative');
        $criteria_id = $this->input->post('criteria_id');

     
        $data = array(
            'kode_alternatif' => $kode_alternatif,
            'nama_alternatif' => $nama_alternatif,
            'keterangan' => $keterangan,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'email' => $email
        );

        $this->AlternativeModel->update($data, $id);
        $this->AlternativeValueModel->destroy_by_alternative($id);

        foreach ($criteria_alternative as $key => $value) {
            $criteria = $this->AlternativeModel->findCriteria($value,  $criteria_id[$key])->row();
            
            $data2 = array(
                'id_alternatif' => $id,
                'id_kriteria' => $criteria_id[$key],
                'id_nilai_kriteria' => $criteria->id,
                'nilai' => $value
            );

            $this->AlternativeValueModel->insert($data2);
        }

        $this->session->set_flashdata('success', "Data puskesmas berhasil diubah!");
        return redirect(base_url('alternative_profile'));
    }
    
}
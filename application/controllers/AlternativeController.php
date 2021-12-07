<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeValueModel', 'CriteriaModel', 'UserModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['alternatives'] = $this->AlternativeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative/index', $data);
        $this->load->view('templates/footer');
	}

    public function alternative_value()
	{
        $data['alternatives'] = $this->AlternativeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative/alternative_value', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('alternative/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $kode_alternatif = $this->input->post('kode_alternatif');
        $nama_alternatif = $this->input->post('nama_alternatif');
        $email = $this->input->post('email');
        $no_telepon = $this->input->post('no_telepon');
        $keterangan = $this->input->post('keterangan');
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

        $this->AlternativeModel->insert($data);
        $insert_id = $this->db->insert_id();
        
        foreach ($criteria_alternative as $key => $value) {
            $criteria = $this->AlternativeModel->findCriteria($value,  $criteria_id[$key])->row();
            
            $data2 = array(
                'id_alternatif' => $insert_id,
                'id_kriteria' => $criteria_id[$key],
                'id_nilai_kriteria' => $criteria->id,
                'nilai' => $value
            );

            $this->AlternativeValueModel->insert($data2);
        }

        $data_user = array(
            'name' => $nama_alternatif, 
            'email' => $email, 
            'role_id' => 3,
            'password' =>  md5($email)
        );
        $this->UserModel->insert($data_user);

        $this->session->set_flashdata('success', "Alternatif berhasil di buat!");
        return redirect(base_url('alternative'));
    }

    public function show($id)
    {
        $data['alternative'] = $this->AlternativeModel->getById($id)->row();
        $data['criteria_alternative'] = $this->AlternativeModel->getWithJoinById($id)->result();

        $this->load->view('templates/header');
        $this->load->view('alternative/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['alternative'] = $this->AlternativeModel->getById($id)->row();
        $data['criteria_alternative'] = $this->AlternativeModel->getWithJoinById($id)->result();

        $this->load->view('templates/header');
        $this->load->view('alternative/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $kode_alternatif = $this->input->post('kode_alternatif');
        $nama_alternatif = $this->input->post('nama_alternatif');
        $email = $this->input->post('email');
        $no_telepon = $this->input->post('no_telepon');
        $keterangan = $this->input->post('keterangan');
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

        $this->session->set_flashdata('success', "Alternatif berhasil di ubah!");
        return redirect(base_url('alternative'));
    }

    public function destroy($id)
    {
        $this->AlternativeValueModel->destroy_by_alternative($id);
        $delete = $this->AlternativeModel->destroy($id);        
        $this->session->set_flashdata('success', "Data berhasil di hapus!");
        return redirect(base_url('alternative'));
    }
    
}
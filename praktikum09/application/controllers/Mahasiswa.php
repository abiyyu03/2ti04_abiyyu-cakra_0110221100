<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function index()
    {
        $this->load->model('Mahasiswa_Model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim="010001";
        $this->mhs1->nama="Faiz Fikri";
        $this->mhs1->gender="L";
        $this->mhs1->ipk=3.85;

        $this->load->model('Mahasiswa_Model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim="020001";
        $this->mhs2->nama="Pandan Wangi";
        $this->mhs2->gender="P";
        $this->mhs2->ipk=3.35;
        
        $list_mhs = [$this->mhs1,$this->mhs2];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/script');
    }

    function create()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create');
        $this->load->view('layout/script');
    }

    function store()
    {
        $this->load->model('Mahasiswa_Model','mhs_input');
        // $request = $this->input->post([
        //     'nama','nim','gender','tmp_lahir','tgl_lahir','prodi','ipk'
        // ]);
        $this->mhs_input->nama = $this->input->post('nama');
        $this->mhs_input->nim = $this->input->post('nim');
        $this->mhs_input->gender = $this->input->post('gender');
        $this->mhs_input->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs_input->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs_input->prodi = $this->input->post('prodi');
        $this->mhs_input->ipk = $this->input->post('ipk');

        $mhs = [$this->mhs_input];
        $data['mhs'] = $mhs;

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('layout/script');
        
        // redirect(base_url('mahasiswa'));
    }
}
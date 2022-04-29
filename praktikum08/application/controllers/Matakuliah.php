<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    function index()
    {
        $this->load->model('Matakuliah_model','mtkl1');
        $this->mtkl1->id=1;
        $this->mtkl1->nama_matkul="Pemrograman Web 2";
        $this->mtkl1->kode="WEB2";
        $this->mtkl1->sks=3;

        $this->load->model('Matakuliah_model','mtkl2');
        $this->mtkl2->id=2;
        $this->mtkl2->nama_matkul="Basis Data";
        $this->mtkl2->kode="BD";
        $this->mtkl2->sks=4;

        $this->load->model('Matakuliah_model','mtkl3');
        $this->mtkl3->id=3;
        $this->mtkl3->nama_matkul="Bahasa Inggris";
        $this->mtkl3->kode="ENG";
        $this->mtkl3->sks=3;
        
        $list_mtkl = [$this->mtkl1,$this->mtkl2,$this->mtkl3];
        $data['list_mtkl'] = $list_mtkl;

        // $this->load->view('layout/header');
        // $this->load->view('layout/navbar');
        // $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index',$data);
        // $this->load->view('layout/script');
    }
}
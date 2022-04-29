<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    function index()
    {
        $this->load->model('Dosen_Model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn="10010";
        $this->dsn1->nama="Abiyyu, S.KOM, M.SC";
        $this->dsn1->gender="L";
        $this->dsn1->pendidikan="S2";

        $this->load->model('Dosen_Model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn="10011";
        $this->dsn2->nama="DR. Faishal, M.SC";
        $this->dsn2->gender="L";
        $this->dsn2->pendidikan="S3";

        $this->load->model('Dosen_Model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn="10012";
        $this->dsn3->nama="DR. Zaky, M.KOM";
        $this->dsn3->gender="L";
        $this->dsn3->pendidikan="S3";
        
        $list_dsn = [$this->dsn1,$this->dsn2,$this->dsn3];
        $data['list_dsn'] = $list_dsn;

        // $this->load->view('layout/header');
        // $this->load->view('layout/navbar');
        // $this->load->view('layout/sidebar');
        $this->load->view('dosen/index',$data);
        // $this->load->view('layout/script');
    }
}
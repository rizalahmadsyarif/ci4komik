<?php

namespace App\Controllers;
use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();     
    }

    public function index()
    {
        // $komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // dd($komik);
        // $komikModel = new \App\Models\KomikModel();
       
        return view('komik/index', $data);
    }

    public function detail($slug)
    {
       
        $data = [
            'title' => 'Detal Komik',
            'komik' =>  $this->komikModel->getKomik($slug)
        ];
        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik'
        ];
        return view('komik/create', $data);

    }
}
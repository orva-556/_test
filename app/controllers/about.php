<?php

class About extends Controller
{
    public function index($nama = 'Adi', $status = 'Mahasiswa', $umur = 22)
    {
        // echo "nama saya $nama, saya adalah seorang $pekerjaan";
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['umur'] = $umur;
        $data['title'] = 'About | Index';
        $data['nav_link_about'] = 'active';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    // public function page()
    // {
    //     // echo 'about/page';
    //     $data['title'] = 'About | Page';
    //     $this->view('templates/header', $data);
    //     $this->view('about/page');
    //     $this->view('templates/footer');
    // }
}

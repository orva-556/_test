<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home | Index';
        $data['nav_link_home'] = 'active';

        $data['log'] = $this->model('Log_model')->getAllLog();
        $data['log_count'] = $this->model('Log_model')->countLog();
        
        // var_dump($data['log']);
        

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

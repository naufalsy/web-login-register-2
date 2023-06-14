<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = service('session');
        $this->auth   = service('authentication');
    }

    public function index()
    {
        $data = [
            'judul' => 'Home'
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar', $data);
        echo view('templates/topbar', $data);
        echo view('home/index', $data);
        echo view('templates/footer', $data);

        // return view('home/index', $data);
    }
}

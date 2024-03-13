<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('home_view');
        echo view('footer_cerrar_sesion_view');
    }
}

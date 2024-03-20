<?php

namespace App\Controllers;

class Recursos extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('recursos_view');
        echo view('footer_view');
    }
}

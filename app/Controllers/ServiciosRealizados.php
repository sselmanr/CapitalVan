<?php

namespace App\Controllers;

class ServiciosRealizados extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('servicios_realizados_view');
        echo view('footer_view');
    }
}

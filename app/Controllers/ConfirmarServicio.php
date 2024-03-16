<?php

namespace App\Controllers;

class ConfirmarServicio extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('confirmar_servicio_view');
        echo view('footer_view');
    }
}

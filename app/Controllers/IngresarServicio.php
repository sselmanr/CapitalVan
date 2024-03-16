<?php

namespace App\Controllers;

class IngresarServicio extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('ingresar_servicio_view');
        echo view('footer_view');
    }
}

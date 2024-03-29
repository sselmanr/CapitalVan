<?php

namespace App\Controllers;
use App\Models\PlaceModel;   

class IngresarServicio extends BaseController
{
    public function index()
    {
        $placeModel = new PlaceModel();
        $data['places'] = $placeModel->findAll();

        echo view('header_view');
        echo view('ingresar_servicio_view', $data);
        echo view('footer_view');
    }
}

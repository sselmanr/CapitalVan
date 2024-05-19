<?php

namespace App\Controllers;
use App\Models\PlaceModel;   

class IngresarServicio extends BaseController
{
    protected $place_model;

    public function __construct(){
        $this->place_model = new PlaceModel();
    }

    public function index(){
        $data['places'] = $this->place_model->findAll();

        echo view('header_view');
        echo view('ingresar_servicio_view', $data);
        echo view('footer_view');
    }
}

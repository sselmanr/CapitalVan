<?php

namespace App\Controllers;
use App\Models\ServiceModel;

class ConfirmarServicio extends BaseController
{
    protected $servicio_model;

    public function __construct(){
        $this->servicio_model = new ServiceModel();
    }
    public function index()
    {
        $data['servicios'] = $this->servicio_model->findAll();
        echo view('header_view');
        echo view('confirmar_servicio_view', $data);
        echo view('footer_view');
    }

    public function confirmarServicio($id_servicio){
        $data = ['servicio' => $this->servicio_model->where($id_servicio)->first()];
        echo view('header_view');
        echo view('confirmar_view', $data);
        echo view('footer_view');
    }
}

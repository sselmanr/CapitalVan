<?php

namespace App\Controllers;
use App\Models\ServiceModel;

class Servicio extends BaseController
{
  protected $service_model;
  
  public function __construct(){
    $this->service_model = new ServiceModel();
  }
  
  public function index()
  {
    echo view('header_view');
    echo view('confirmar_servicio_view', $data);
    echo view('footer_view');
  }
  
  public function confirmarServicioMostrar($id_service){
    $data['servicio'] = $this->service_model
    ->select('service.*, company.company_name, origin.place_name as origin_place_name, destination.place_name as destination_place_name')
    ->join('company', 'company.id_company = service.id_service_company')
    ->join('place as origin', 'origin.id_place = service.service_origin', 'left')
    ->join('place as destination', 'destination.id_place = service.service_destination', 'left')
    ->where('service.id_service', $id_service)
    ->first();

    echo view('header_view');
    echo view('confirmar_view', $data);
    echo view('footer_view');
  }
  
  public function confirmarServicio($id_service, $status){
    $this->service_model
        ->set('service_status', $status)
        ->where('id_service', $id_service)
        ->update();
    
    $data['servicios'] = $this->service_model->findAll();
    
    echo view('header_view');
    echo view('confirmar_servicio_view', $data);
    echo view('footer_view');
}
}

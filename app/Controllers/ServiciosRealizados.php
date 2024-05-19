<?php
namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\CompanyModel;

class ServiciosRealizados extends BaseController
{
    protected $service_model;
    protected $company_model; 
    
    
    public function __construct(){
        $this->service_model = new ServiceModel();
        $this->company_model = new CompanyModel();
    }

    public function index()
    {
        $data['servicios'] = $this->service_model->join('company', 'company.id_company = service.id_service_company', 'left')->findAll();
        $data['empresas'] = $this->company_model->findAll();

        echo view('header_view');
        echo view('servicios_realizados_view', $data);
        echo view('footer_view');
    }

    public function ingresarServicio(){
        $data = [
            'id_service_driver'             => $this->request->getPost(''),
            'id_service_guide'              => $this->request->getPost(''),
            'id_service_approver'           => $this->request->getPost(''),
            'id_service_vehicle'            => $this->request->getPost(''),
            'id_service_company'            => $this->request->getPost(''),
            'id_service_type'               => $this->request->getPost(''),
            'service_start_time'            => $this->request->getPost(''),
            'service_end_time'              => $this->request->getPost(''),
            'service_origin'                => $this->request->getPost('origin'),
            'service_destination'           => $this->request->getPost(''),
            'service_date'                  => $this->request->getPost(''),
            'service_acronym'               => $this->request->getPost(''),
            'service_quantity_passengers'   => $this->request->getPost('npasajeros'),
            'service_price'                 => $this->request->getPost(''),
            'service_status'                => $this->request->getPost(''),
            'service_code_flight'           => $this->request->getPost(''),
            'service_attachment'            => $this->request->getPost(''),
        ];

        $this->service_model->insert($data);

        
    }
}
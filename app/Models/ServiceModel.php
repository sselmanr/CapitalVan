<?php
namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model{
    protected $table = "Service";
    protected $primaryKey = 'id_service';
    protected $allowed_fields = ["
      'id_service_driver',
      'id_service_guide',
      'id_service_approver',
      'id_service_vehicle',
      'id_service_company',
      'service_origin',
      'service_destination',
      'service_date',
      'service_acronym',
      'service_quantity_passengers',
      'service_price',
      'service_status',
      'service_attachment',
    "];

    public function index(){

    }

    public function activeServices(){
      $this->builder()->distinct();
      $this->builder()->select('s.id_service, s.service_status as status, ud.user_name as nameDriver, ud.user_lastname as lastnameDriver,' .
      'ua.user_name as nameApprover, ua.user_lastname as lastnameApprover, c.company_name, po.place_name as origin, pd.place_name as destination,' .
      ' s.service_date, s.service_acronym, s.service_quantity_passengers, s.service_price, s.service_attachment, v.vehicle_licence_plate');
      $this->builder()->from('Service as s');
      $this->builder()->join('User as ud', 's.id_service_driver = ud.id_user', 'LEFT');
      $this->builder()->join('User as ua', 's.id_service_approver = ua.id_user', 'LEFT');
      $this->builder()->join('Company as c', 's.id_service_company = c.id_company', 'LEFT');
      $this->builder()->join('Place as po', 's.service_origin = po.id_place', 'LEFT');
      $this->builder()->join('Place as pd', 's.service_destination = pd.id_place', 'LEFT');
      $this->builder()->join('Vehicle as v', 's.id_service_vehicle = v.id_vehicle', 'LEFT');
      $this->builder()->where('s.service_status !=', 0);
      return $this;
    }

    public function addService(){

    }

    public function deleteService(){

    }

    public function serviceConfirm(){

    }

    public function finishedService(){

    }
}
<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = "Service";
    protected $allowed_fields = ["
      'id_service',
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
      $this->builder()->where('service_status', 1);
      return $this;
    }
}
<?php
namespace App\Models;
use CodeIgniter\Model;

class CompanyModel extends Model{
  protected $table = "Company";
  protected $allowed_fields = ["
  'id_company',
  'company_name',
  'company_contact_name',
  'company_rut',
  'company_phone',
  'company_email',
  'company_address',
  "];
  
  public function index(){ 
  }
}
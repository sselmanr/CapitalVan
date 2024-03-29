<?php
namespace App\Models;
use CodeIgniter\Model;

class PlaceModel extends Model{
  protected $table = "Place";
  protected $allowed_fields = ["
  'id_place',
  'place_name',
  'place_address',
  'place_phone',
  'place_email',
  "];
  
  public function index(){ 
  }
}
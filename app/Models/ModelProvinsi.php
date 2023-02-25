<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelProvinsi extends Model{

  public function all_data(){
    return $this->db->table('covid_provinsi')
    ->orderBy('id_provinsi', 'ASC')
    ->get()
    ->getResultArray();
  }


}

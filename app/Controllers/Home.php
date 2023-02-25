<?php namespace App\Controllers;
use App\Models\ModelProvinsi;

class Home extends BaseController
{
	
	public function __construct()
  {
    $this->ModelProvinsi = new ModelProvinsi();
	}

	public function index()
	{

		$prov = json_decode(file_get_contents('https://data.covid19.go.id/public/api/prov.json'),true);
	
		$data = [
			'title' => 'Covid 19 Nasional',
			'provinsi' => $this->ModelProvinsi->all_data(),
			'prov' =>$prov,
			'isi' => 'v_home',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function pemetaanNasional()
	{

		$pemetaanProv = json_decode(file_get_contents('https://data.covid19.go.id/public/api/prov.json'),true);

		$data = [
			'title' => 'Pemetaan Covid 19 Nasional',
			'pemetaanProv' => $pemetaanProv,
			'isi' => 'v_pemetaanNasional',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function global()
	{
		$global = json_decode(file_get_contents('https://api.covid19api.com/summary'),true);

	

		$data = [
			'title' => 'Pemetaan Covid 19 Global',
			'global' => $global,
			'isi' => 'v_global',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function pemetaanGlobal()
	{
		$pemetaanGlob = json_decode(file_get_contents('https://countriesnow.space/api/v0.1/countries/positions'),true);
		$data = [
			'title' => 'Pemetaan Covid 19 Global',
			'pemetaanGlob' => $pemetaanGlob,
			'isi' => 'v_pemetaanGlobal',
		];
		echo view('layout/v_wrapper', $data);
	}



	//--------------------------------------------------------------------

}

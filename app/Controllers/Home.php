<?php

namespace App\Controllers;

use App\Models\CoinAPIModel;

class Home extends BaseController
{

	public function __construct()
	{
		$this->CoinAPIModel = new CoinAPIModel();
	}

	public function index()
	{
		if ($this->request->getVar('opsi') != 'all' && $this->request->getVar('opsi') != null) {
			$counter = 0;
			$keyword = $this->request->getVar('opsi');
			$hasiltemp = $this->CoinAPIModel->GetTradesLatest();
			foreach ($hasiltemp['rates'] as $h) {

				if ($h['type'] == $keyword) {
					$hasil[$counter] = $h;
					$counter++;
				}
			}
			$value = $keyword;
		} else {
			$hasiltemp = $this->CoinAPIModel->GetTradesLatest();
			$hasil = $hasiltemp['rates'];
			$value = 'All';
		}


		$data = [
			'title' => "Home Page",
			'hasil' => $hasil,
			'value' => $value,
			
		];
		return view('pages/home.php', $data);
	}
}

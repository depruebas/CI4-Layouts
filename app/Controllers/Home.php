<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		$options = [
			'title' => 'Soy el titulo de la página',
			'css' => '/css/style.css',
		];

		return renderView('ly_index', 'index', $options);

	}
}

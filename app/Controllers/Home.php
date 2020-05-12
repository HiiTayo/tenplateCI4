<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$test="header";
		$data = [
						'view' => '',
						'js'=>[],
						'css'=>[]
                ];
		echo view('template/index',$data);
	}

	//--------------------------------------------------------------------

}

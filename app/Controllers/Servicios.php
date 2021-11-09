<?php

namespace App\Controllers;
use App\Libraries\Gral;
use App\Libraries\Contador;
use App\Models\PropiedadesModel;


class Servicios extends BaseController
{

    public function tradicional()
	{
		$Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');

		$data['title'] = 'Sistema tradicional';

		return view('ServTradicional', $data);
	}

    public function steel_framing()
	{
		$Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');

		$data['title'] = 'Steel Framing';

		return view('ServSteelframing', $data);
	}

	public function brimax()
	{
		$Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');

		$data['title'] = 'Sistema Brimax';

		return view('ServBrimax', $data);
	}

}

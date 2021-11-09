<?php

namespace App\Controllers;
use App\Libraries\Gral;
use App\Libraries\Contador;
use App\Models\PropiedadesModel;
use App\Models\PropiedadesimagenesModel;

class Propiedades extends BaseController
{
	
	public function index()
	{
		$Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');

        $PropiedadesModel = new PropiedadesModel();
        $data['propiedades'] = $PropiedadesModel->getPropiedades();
        
		$data['title'] = 'Propiedades';
		
		return view('Propiedades', $data);
	}


	public function getPropiedades($slug = null)
	{
		$Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');

        $PropiedadesModel = new PropiedadesModel();
        $data['propiedad'] = $PropiedadesModel->getPropiedad($slug);

        //if ( $data['propiedad'] ) {
			
            $data_update = [ 'visitas'   => $data['propiedad']->visitas+1 ];
			$PropiedadesModel->update($data['propiedad']->id, $data_update);

	        $PropiedadesimagenesModel = new PropiedadesimagenesModel();
	        $data['imagenes'] = $PropiedadesimagenesModel->where('propiedades_id', $data['propiedad']->id)->orderBy('principal', 'DESC')->findAll();

	        $data['title'] = $data['propiedad']->titulo;
			return view('Propiedad', $data);
		
        //} else 
		//	return redirect()->to('/');
		
	}


    public function buscar(){
		
        $Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');

        $PropiedadesModel = new PropiedadesModel();
        $data['propiedades'] = $PropiedadesModel->getBusqueda($_GET['query'],$_GET['tipo'],$_GET['ciudad'],$_GET['dormi'],$_GET['garages'],$_GET['banos'],$_GET['precio']);
        
		$data['title'] = 'Propiedades';
		
		return view('Propiedades', $data);

    }



}

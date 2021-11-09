<?php
namespace App\Controllers;
use App\Libraries\Gral;
use App\Models\CiudadModel;
use App\Models\EstadoModel;
use App\Models\PreciotipoModel;
use App\Models\TipopropiedadModel;
use App\Models\PropiedadesModel;
use App\Models\PropiedadesimagenesModel;

class ADMINPropiedades extends BaseController{
	protected $helpers = [];
	protected $db;

	public function index(){

		$data['title'] = 'Propiedades';

        $PropiedadesModel = new PropiedadesModel();
        $data['propiedades'] = $PropiedadesModel->getPropiedades();	

		return view('admin/Propiedades', $data);
	}
 
 	public function formnuevo(){
		//include helper form
		helper(['form']);
		$data['title'] = 'Carga de propiedades';

        $CiudadModel = new CiudadModel();
        $data['ciudad'] = $CiudadModel->orderBy('nombre', 'ASC')->findAll();	
        $EstadoModel = new EstadoModel();
        $data['estado'] = $EstadoModel->orderBy('nombre', 'ASC')->findAll();
		$PreciotipoModel = new PreciotipoModel();
		$data['preciotipo'] = $PreciotipoModel->orderBy('nombre', 'ASC')->findAll();		
		$TipopropiedadModel = new TipopropiedadModel();
        $data['tipopropiedad'] = $TipopropiedadModel->orderBy('nombre', 'ASC')->findAll();

		return view('admin/PropiedadNuevo', $data);
	}

	public function savenuevo(){
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'titulo'    => 'required|min_length[3]|max_length[100000]',
			'subtitulo' => 'required|min_length[3]|max_length[100000]',
			'precio'    => 'required|min_length[3]|max_length[20]'
		];
		
		if($this->validate($rules)){

			$slug = $this->createSlug($this->request->getVar('titulo').$this->request->getVar('subtitulo'));

			$PropiedadesModel = new PropiedadesModel();
			$data = [
				'tipopropiedad_id' => $this->request->getVar('tipopropiedad_id'),
				'estado_id'        => $this->request->getVar('estado_id'),
				'municipios_id'    => $this->request->getVar('municipios_id'),
				'ciudad_id'        => $this->request->getVar('ciudad_id'),
				'preciotipo_id'    => $this->request->getVar('preciotipo_id'),
				'slug'             => $slug,
				'titulo'           => $this->request->getVar('titulo'),
				'subtitulo'        => $this->request->getVar('subtitulo'),
				'descripcion'      => $this->request->getVar('descripcion'),
				'area'             => $this->request->getVar('area'),
				'comodidades'      => $this->request->getVar('comodidades'),
				'dormitorios'      => $this->request->getVar('dormitorios'),
				'banos'            => $this->request->getVar('banos'),
				'garage'           => $this->request->getVar('garage'),
				'precio'           => $this->request->getVar('precio')
			];
			$PropiedadesModel->save($data);
			$id = $PropiedadesModel->getInsertID();

			//return redirect()->to('/admin/propiedades/imagenes/'.$id);
			return redirect()->to('/admin/propiedades/');

		} else {

			$data['title'] = 'Carga de propiedades';

			$CiudadModel = new CiudadModel();
			$data['ciudad'] = $CiudadModel->orderBy('nombre', 'ASC')->findAll();	
			$EstadoModel = new EstadoModel();
			$data['estado'] = $EstadoModel->orderBy('nombre', 'ASC')->findAll();
			$PreciotipoModel = new PreciotipoModel();
			$data['preciotipo'] = $PreciotipoModel->orderBy('nombre', 'ASC')->findAll();		
			$TipopropiedadModel = new TipopropiedadModel();
			$data['tipopropiedad'] = $TipopropiedadModel->orderBy('nombre', 'ASC')->findAll();

			$data['validation'] = $this->validator;
			return view('admin/PropiedadNuevo', $data);
		}

	}

 	public function formeditar($propiedades_id = null){
		//include helper form
		helper(['form']);
		$data['title'] = 'Editar propiedades';

		$CiudadModel = new CiudadModel();
		$data['ciudad'] = $CiudadModel->orderBy('nombre', 'ASC')->findAll();	
		$EstadoModel = new EstadoModel();
		$data['estado'] = $EstadoModel->orderBy('nombre', 'ASC')->findAll();
		$PreciotipoModel = new PreciotipoModel();
		$data['preciotipo'] = $PreciotipoModel->orderBy('nombre', 'ASC')->findAll();		
		$TipopropiedadModel = new TipopropiedadModel();
		$data['tipopropiedad'] = $TipopropiedadModel->orderBy('nombre', 'ASC')->findAll();	

        $PropiedadesModel = new PropiedadesModel();
        $data['propiedad'] = $PropiedadesModel->where('id', $propiedades_id)->first();

        return view('admin/PropiedadEditar', $data);

	}


	public function saveeditar(){
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'titulo'    => 'required|min_length[3]|max_length[100000]',
			'subtitulo' => 'required|min_length[3]|max_length[100000]',
			'precio'    => 'required|min_length[3]|max_length[20]'
		];
		
		if($this->validate($rules)){

			$slug = $this->createSlug($this->request->getVar('titulo').$this->request->getVar('subtitulo'));

			$PropiedadesModel = new PropiedadesModel();
			$data = [
				'tipopropiedad_id' => $this->request->getVar('tipopropiedad_id'),
				'estado_id'        => $this->request->getVar('estado_id'),
				'municipios_id'    => $this->request->getVar('municipios_id'),
				'ciudad_id'        => $this->request->getVar('ciudad_id'),
				'preciotipo_id'    => $this->request->getVar('preciotipo_id'),
				'slug'             => $slug,
				'titulo'           => $this->request->getVar('titulo'),
				'subtitulo'        => $this->request->getVar('subtitulo'),
				'descripcion'      => $this->request->getVar('descripcion'),
				'area'             => $this->request->getVar('area'),
				'comodidades'      => $this->request->getVar('comodidades'),
				'dormitorios'      => $this->request->getVar('dormitorios'),
				'banos'            => $this->request->getVar('banos'),
				'garage'           => $this->request->getVar('garage'),
				'precio'           => $this->request->getVar('precio')
			];

			$id = $this->request->getVar('id');

			$PropiedadesModel->update($id, $data);

			return redirect()->to('/admin/propiedades/');

		} else {

			$data['title'] = 'Editar propiedades';

			$CiudadModel = new CiudadModel();
			$data['ciudad'] = $CiudadModel->orderBy('nombre', 'ASC')->findAll();	
			$EstadoModel = new EstadoModel();
			$data['estado'] = $EstadoModel->orderBy('nombre', 'ASC')->findAll();
			$PreciotipoModel = new PreciotipoModel();
			$data['preciotipo'] = $PreciotipoModel->orderBy('nombre', 'ASC')->findAll();		
			$TipopropiedadModel = new TipopropiedadModel();
			$data['tipopropiedad'] = $TipopropiedadModel->orderBy('nombre', 'ASC')->findAll();

			$data['validation'] = $this->validator;
			return view('admin/PropiedadEditar', $data);
		}

	}

	public function eliminar($propiedades_id = null){
		
		$PropiedadesModel = new PropiedadesModel();
		$select = $PropiedadesModel->where('id', $propiedades_id)->first();
		$PropiedadesModel->where('id', $propiedades_id)->delete();

		$data = [
	        'success' => true
		];

		return $this->response->setJSON($data);
    }

    public function imagenes($propiedades_id = null){
        
		$data['propiedades_id'] = $propiedades_id;

        $PropiedadesimagenesModel = new PropiedadesimagenesModel();
        $data['imagenes'] = $PropiedadesimagenesModel->where('propiedades_id', $propiedades_id)->findAll();

		$data['title'] = 'Imagenes propiedades';

		$data['Gral'] = new Gral();

		return view('admin/PropiedadesImagenes', $data);
    }

    public function imagenRecortada(){
	    
		$data = $_POST['image'];
		$emprendimiento_id = $_POST['id'];

		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);

		$data = base64_decode($data);
		$imageName = time().'.png';
		file_put_contents('imagenes/'.$imageName, $data);


        $model = new EmprendedoresimagenesModel();
        $existPrincipal = $model->existPrincipal($emprendimiento_id);
		if ( $existPrincipal->existe > 0 ) {
	        $save = [
	            'emprendedores_id' => $emprendimiento_id,
	            'file'             => $imageName
	        ];
		} else {
	        $save = [
	            'emprendedores_id' => $emprendimiento_id,
	            'file'             => $imageName,
	            'principal'        => 1
	        ];
	    }
        $model->save($save);
        $id = $model->getInsertID();


		$data = [
	        'success' => true,
	        'imageName' => $imageName,
	        'id' => $id
		];
		return $this->response->setJSON($data);
    }

    public function imageneseliminar($imagen_id = null){
		
		$model = new EmprendedoresimagenesModel();
		$select = $model->where('id', $imagen_id)->first();
		$model->where('id', $imagen_id)->delete();

        $existPrincipal = $model->existPrincipal($imagen_id);
		if ( $existPrincipal->existe == 0 ) {
			$model = new EmprendedoresimagenesModel();
	        $selectup = $model->where('emprendedores_id', $select['emprendedores_id'])->first();
	        $saveup = [ 'principal' => 1 ];

	        $model->update($selectup['id'], $saveup);
	    }

		unlink('imagenes/'.$select['file']);

		$data = [
	        'success' => true,
	        'id' => $imagen_id
		];

		return $this->response->setJSON($data);
    }



	public function obtenerExtension($str)
	{
		return pathinfo($str, PATHINFO_EXTENSION);;
	}

	public function icreate($filename)
	{
		$isize = getimagesize($filename);
		if ($isize['mime']=='image/jpeg')
			return imagecreatefromjpeg($filename);
		elseif ($isize['mime']=='image/png')
			return imagecreatefrompng($filename);
	}

	public function resizeCrop($image, $width, $height, $displ='center')
	{
		$new = imageCreateTrueColor($width, $height);
		imagecopyresampled($new, $image, 0, 0, $_GET['x'], $_GET['y'], $_GET['w'], $_GET['h'], $_GET['w'],$_GET['h']);

		return $new;
	}

	public function createSlug($string)
	{
		$characters = array(
			"Á" => "A", "Ç" => "c", "É" => "e", "Í" => "i", "Ñ" => "n", "Ó" => "o", "Ú" => "u",
			"á" => "a", "ç" => "c", "é" => "e", "í" => "i", "ñ" => "n", "ó" => "o", "ú" => "u",
			"à" => "a", "è" => "e", "ì" => "i", "ò" => "o", "ù" => "u"
		);
		
		$string = strtr($string, $characters);
		$string = strtolower(trim($string));
		$string = preg_replace("/[^a-z0-9-]/", "-", $string);
		$string = preg_replace("/-+/", "-", $string);

		if(substr($string, strlen($string) - 1, strlen($string)) === "-") {
			$string = substr($string, 0, strlen($string) - 1);
		}

		return $string;
	}


}

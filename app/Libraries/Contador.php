<?php 
namespace App\Libraries;

class Contador
{
	protected $variable;

	public function __construct()
	{

	}

	public function SetVisitas($Tipo, $TipoId = 0, $Verifica = true){

        $db = \Config\Database::connect();

        // asigno las variables
        $ip = $_SERVER['REMOTE_ADDR']; 
        $anio = date("Y");
        $dia = date("z");
        $fecha = date("Y-m-d h:i:s");
        //datos del navegador
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        // saber que link han hecho click hacia mi pagina
        if(isset($_SERVER['HTTP_REFERER'])) 
            $HttpReferer = $_SERVER['HTTP_REFERER']; 
        else 
            $HttpReferer = ""; 


        if ($Verifica) {
            //comparo la nueva visita en la base
            $sql = "SELECT COUNT(*) cant
                    FROM contador 
                    WHERE tipo   = '" . $Tipo . "' 
                    AND   tipoid = '" . $TipoId . "' 
                    AND   ip     = '" . $ip . "' 
                    AND   anio   = '" . $anio . "' 
                    AND   dia    = '" . $dia . "'";

	        $query = $db->query( $sql );
	        $row = $query->getRow();
			$visitas_anteriores = $row->cant;

        } else {
            $visitas_anteriores = 0;
        }

        //si no visito antes, o hace mas de un dia cuento la visita 
        if($visitas_anteriores == 0)   
        {
            //echo "se cuenta la visita";
            $sql = "INSERT INTO contador (tipo, tipoid, ip, fecha, anio, dia, useragent, httpreferer) ";   
            $sql.= "VALUES ('" . $Tipo . "','" . $TipoId . "','" . $ip . "','" . $fecha . "','" . $anio . "','" . $dia . "','" . $userAgent . "','" . $HttpReferer . "')";
            $query = $db->query( $sql );
            //echo $sql;
        }
        
    }

}
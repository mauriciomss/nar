<?php 
namespace App\Models;
use CodeIgniter\Model;

class PropiedadesimagenesModel extends Model
{
    protected $table = 'propiedades_imagenes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['propiedades_id','file', 'principal'];


    public function getCount()
    {
        return $this->countAll();
    }

    public function existPrincipal($emprendimiento_id){
        $db = \Config\Database::connect();
        $query = $db->query('SELECT COUNT(*) existe
                                FROM propiedades_imagenes i 
                                WHERE i.propiedades_id = '.$emprendimiento_id.' 
                                AND   i.principal = 1 ');
        //$row = $query->getResultArray();
        //$row = $query->getResult();
        $row = $query->getRow();

        return $row;
    }    

}
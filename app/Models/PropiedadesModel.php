<?php 
namespace App\Models;
use CodeIgniter\Model;

class PropiedadesModel extends Model
{
    protected $table = 'propiedades';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tipopropiedad_id','estado_id','municipios_id','ciudad_id','preciotipo_id','slug','titulo','subtitulo','descripcion','comodidades','dormitorios','banos','garage','precio','visitas','area'];

    public function getPropiedades()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT p.*, tp.nombre tipopropiedad, e.nombre estado, c.nombre ciudad, pt.signo, pt.nombre preciotipo, i.file
                                FROM propiedades p
                                    INNER JOIN tipopropiedad tp ON tp.id = p.tipopropiedad_id
                                    INNER JOIN estado e ON e.id = p.estado_id
                                    INNER JOIN ciudad c ON c.id = p.ciudad_id
                                    INNER JOIN preciotipo pt on pt.id = p.preciotipo_id
                                    LEFT JOIN propiedades_imagenes i ON i.propiedades_id = p.id AND i.principal = 1
                                ORDER BY p.titulo ASC');
        $row   = $query->getResultArray();
        return $row;
    }

    public function getCount()
    {
        return $this->countAll();
    }

    public function getDestacadas()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT p.*, tp.nombre tipopropiedad, e.nombre estado, c.nombre ciudad, pt.signo, pt.nombre preciotipo, i.file
                                FROM propiedades p
                                    INNER JOIN tipopropiedad tp ON tp.id = p.tipopropiedad_id
                                    INNER JOIN estado e ON e.id = p.estado_id
                                    INNER JOIN ciudad c ON c.id = p.ciudad_id
                                    INNER JOIN preciotipo pt on pt.id = p.preciotipo_id
                                    LEFT JOIN propiedades_imagenes i ON i.propiedades_id = p.id AND i.principal = 1
                                WHERE p.destacada = 1 
                                LIMIT 3');
        $row   = $query->getResultArray();

        return $row;
    }

    public function getUltimas()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT p.*, tp.nombre tipopropiedad, e.nombre estado, c.nombre ciudad, pt.signo, pt.nombre preciotipo, i.file
                                FROM propiedades p
                                    INNER JOIN tipopropiedad tp ON tp.id = p.tipopropiedad_id
                                    INNER JOIN estado e ON e.id = p.estado_id
                                    INNER JOIN ciudad c ON c.id = p.ciudad_id
                                    INNER JOIN preciotipo pt on pt.id = p.preciotipo_id
                                    LEFT JOIN propiedades_imagenes i ON i.propiedades_id = p.id AND i.principal = 1
                                ORDER BY p.id DESC 
                                LIMIT 4');
        $row   = $query->getResultArray();

        return $row;
    }
    
    public function getPropiedad($slug)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT p.*, tp.nombre tipopropiedad, e.nombre estado, c.nombre ciudad, pt.signo, pt.nombre preciotipo, i.file
                                FROM propiedades p
                                    INNER JOIN tipopropiedad tp ON tp.id = p.tipopropiedad_id
                                    INNER JOIN estado e ON e.id = p.estado_id
                                    INNER JOIN ciudad c ON c.id = p.ciudad_id
                                    INNER JOIN preciotipo pt on pt.id = p.preciotipo_id
                                    LEFT JOIN propiedades_imagenes i ON i.propiedades_id = p.id AND i.principal = 1
                                WHERE p.slug = '".$slug."'");
        $row   = $query->getRow();

        return $row;
    }

    public function getBusqueda($query,$tipo,$ciudad,$dormi,$garages,$banos,$precio)
    {
        $db = \Config\Database::connect();

        $sql = "SELECT p.*, tp.nombre tipopropiedad, e.nombre estado, c.nombre ciudad, pt.signo, pt.nombre preciotipo, i.file
                FROM propiedades p
                    INNER JOIN tipopropiedad tp ON tp.id = p.tipopropiedad_id
                    INNER JOIN estado e ON e.id = p.estado_id
                    INNER JOIN ciudad c ON c.id = p.ciudad_id
                    INNER JOIN preciotipo pt on pt.id = p.preciotipo_id
                    LEFT JOIN propiedades_imagenes i ON i.propiedades_id = p.id AND i.principal = 1 
                WHERE p.id > 0 ";
        
        if($query != ""){
            $sql .= " AND ( p.titulo LIKE '%".$query."%' ";
            $sql .= " OR p.subtitulo LIKE '%".$query."%' ";
            $sql .= " OR p.descripcion LIKE '%".$query."%' ";
            $sql .= " OR p.comodidades LIKE '%".$query."%' ) ";
        }
        
        if($tipo != ""){
            $sql .= " AND p.tipopropiedad_id = ".$tipo." ";
        }

        if($ciudad != ""){
            $sql .= " AND p.ciudad_id = ".$ciudad." ";
        }
        
        if($dormi != ""){
            $sql .= " AND p.dormitorios >= ".$dormi." ";
        }

        if($garages != ""){
            $sql .= " AND p.garages >= ".$garages." ";
        }

        if($banos != ""){
            $sql .= " AND p.banos >= ".$banos." ";
        }

        if($precio != ""){
            $sql .= " AND p.precio <= ".$precio." ";
        }
        
        $query = $db->query($sql);
        $row   = $query->getResultArray();

        return $row;
    }

}
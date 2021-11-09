<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContadorModel extends Model
{
    protected $table = 'contador';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','users_id','tipo','tipoid','ip','fecha','anio','dia','useragent','httpreferer'];
}


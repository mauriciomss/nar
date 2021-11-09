<?php 
namespace App\Models;
use CodeIgniter\Model;

class TipopropiedadModel extends Model
{
    protected $table = 'tipopropiedad';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','slug'];
}
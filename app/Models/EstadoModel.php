<?php 
namespace App\Models;
use CodeIgniter\Model;

class EstadoModel extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','slug'];
}
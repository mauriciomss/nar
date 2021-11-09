<?php 
namespace App\Models;
use CodeIgniter\Model;

class CiudadModel extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','slug'];
}
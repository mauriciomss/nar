<?php 
namespace App\Models;
use CodeIgniter\Model;

class PreciotipoModel extends Model
{
    protected $table = 'preciotipo';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','slug'];
}
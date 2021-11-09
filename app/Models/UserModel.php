<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	protected $table 			= 'usuarios';
	protected $primaryKey 		= 'id';
	protected $allowedFields 	= ['id', 'nombre', 'email', 'password', 'sidebar'];
}

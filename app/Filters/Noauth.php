<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Noauth implements FilterInterface
{
	public function before(RequestInterface $request,  $arguments = NULL)
	{
		helper(['url', 'session', 'emai', 'upload', 'system_helper', 'database']);
		// Do something here
		if(session()->get('logged_in')){
			return redirect()->to(base_url('/dashboard'));
			//redireccionar(base_url('ptable'), 'Bienvenido de nuevo', 'success', 'fa fa-check', ' ', '#');
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Do something here
	}
}
<?php namespace App\Controllers;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Log_out extends BaseController
{

    
	public function index()
	{
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('login');
    }

	//--------------------------------------------------------------------

}

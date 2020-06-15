<?php namespace App\Controllers;



use App\Models\Login_model;
    
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    protected $Login_model;

    
	public function index()
	{
        $session = \Config\Services::session();
        if ($session->get('user_type')== 1) {
            return redirect()->to('tickets'); 
        }
		return view('login');
    }
    
    
    public function ajax_login() {
        // print_r($_SERVER); exit;
        $session = \Config\Services::session();
        $this->Login_model = new Login_model();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data =$this->Login_model->where('email', $_POST['username'])->find();
            if(sizeof($data)>0){
                if (password_verify($_POST['password'], $data[0]['password'])) {
                    $session->set($data[0]);
                    $result = array("status" => TRUE, 'message' => 'You have successfully logged in.');                 
                } else {
                    $result = array("status" => FALSE, 'message' => 'Invalid Email or Password1.');
                }
            }else{
                $result = array("status" => FALSE, 'message' => 'Invalid Email or Password.');
            }
            echo json_encode($result);
        }
    }
    
    
    public function log_out() {
        // print_r($_SERVER); exit;
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('login'); 
    }

	//--------------------------------------------------------------------

}

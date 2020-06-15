<?php namespace App\Controllers;

use App\Models\Dashboard_model;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class Generate extends BaseController
{
    protected $Dashboard_model;

	public function index()
	{
        $this->Dashboard_model = new Dashboard_model();
        $session = \Config\Services::session();
        if ($session->get('user_type')!= 1) {
            return redirect()->to('login'); 
        }
        $data = [];
        $data['user'] =$this->Dashboard_model->where('user_type', 1)->find()[0];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            {
            $data['user']['form_data']=$_POST;
            $post_data = [];
            $post_data['id'] = '0';
            $post_data['contactId'] = "7189000001594001";
            $post_data['email'] =  isset($_POST['email'])?$_POST['email']:$data['user']['email'];
            $post_data['category'] =  isset($_POST['category'])?$_POST['category']:"general";
            $post_data['departmentId'] =  isset($_POST['department'])?strval($_POST['department']):"7189000000051431";
            $post_data['subject'] =  isset($_POST['subject'])?$_POST['subject']:"sample subject";
            $post_data['description'] =  isset($_POST['description'])?$_POST['description']:"";
            $post_data['priority'] =  isset($_POST['priority'])?$_POST['priority']:'High';
            $zoho_post_data = (object) $post_data;
                            
            $zoho_desk_api = 'https://desk.zoho.in/api/v1/tickets';
            $headers = array(
            'Authorization:2e4740934d006ac74de79025ce3ed073',
            'orgId:60001280952'
            ); 
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $zoho_desk_api); 
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($zoho_post_data)); 
            $result = curl_exec($ch); 
            echo "
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css'>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js'></script>
                <script>
                $.alert({
                    title: 'Success!',
                    content: 'Ticket has been created successfuly!',
                });
                </script>";
            curl_close($ch);

            // $data['post_result']=$result;
            // print_r($result) ;
            // exit;
          }
        }
		return view('ticket_generate',$data);
    }
    

	//--------------------------------------------------------------------

}

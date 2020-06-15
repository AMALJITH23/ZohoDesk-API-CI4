<?php namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class Tickets extends BaseController
{
    protected $request;
    
	public function index()
	{
        $session = \Config\Services::session();
        $pager = \Config\Services::pager();

        if ($session->get('user_type')!= 1) {
            return redirect()->to('login'); 
        }
        $zoho_desk_api = 'https://desk.zoho.in/api/v1/tickets';

        if(isset($_GET['status']) && $_GET['status']!="all"){
            // print_r($_GET['status']); exit;
            $newdata['status']  = $_GET['status'];
            $session->set($newdata);
            $zoho_desk_api = 'https://desk.zoho.in/api/v1/tickets?status='.$newdata['status'];
            // test
        }
                        
        $headers = array(
        'Authorization:2e4740934d006ac74de79025ce3ed073',
        'orgId:60001280952'
        ); 

        $cURLConnection = curl_init();
        curl_setopt($cURLConnection, CURLOPT_URL, $zoho_desk_api);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($cURLConnection);
        curl_close($cURLConnection);
        $resultArray = json_decode($result, true);
        // print_r($resultArray['data']); exit;

        $data = [];
        $data['tickets'] =$resultArray['data'];
        $data['tickets_count']=sizeof($data['tickets']);
        
		return view('tickets',$data);
    }
}

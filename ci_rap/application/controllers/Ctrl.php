<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Content-Type: application/x-javascript; charset=utf8');
class Ctrl extends CI_Controller {

   
    public function index()
    {
        $this->load->model('Model');
        $data = $this->Model->get_data();
        $n = array("Min" => date("i"), "Sec" => date("s"));
        // echo json_encode($n);
   // echo $data
   // print_r($data);
  
       echo json_encode($data);
     
    }
}

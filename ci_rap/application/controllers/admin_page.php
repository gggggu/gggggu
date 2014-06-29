<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//header('Content-Type: application/x-javascript; charset=utf8');
class Admin_page extends CI_Controller {   
    public function __construct() {
//        $this->load->model('model');
        parent::__construct();
    }
    public function index()
    {
        
    }    
    public function login($num=0){        
        $data['login'] = $this->input->post('login');
        $data['password'] = md5($this->input->post('password'));         
        $this->load->view('login_view');  
        $this->load->model('model');
            if($this->model->login($data)==1){
                header('Location: http://localhost/gggggu/ci_rap/index.php/ctrl');
           }else{
               if($num==2){
                   $ip = $_SERVER["REMOTE_ADDR"];
               $this->model->wrong_login($ip);
               //доделать оповещение
           } 
           
    }
    }
    
    }
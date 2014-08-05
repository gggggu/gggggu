<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminSignCtrl extends CI_Controller {

	public function index()	{
	
	}
	public function login(){    
		    $this->load->view('admin/login_view');
              }
  public function authentification(){      
        session_start();       
        $_SESSION['auth'] = 'incomplete';
        $data['login'] = $this->input->post('login');
        $data['password'] = md5($this->input->post('password'));         
        // валидатор засунуть + xss 
            if($this->adminmodel->login($data)==1){
                $_SESSION['auth'] = "completed";
            }            
              if($_SESSION['auth']=="completed"){               
                $this->pages->redirectTo('adminpagectrl/panel1');                
              }else{
                $this->login();                
              }       
          }
    }


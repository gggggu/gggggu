<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPageCtrl extends CI_Controller {
	public function __construct(){			
		parent::__construct();	
		$this->load->library('check');		
	}
	public function panel1(){				
		if($this->check->session_check()==true){
			$data['page_id'] = __FUNCTION__;
			$data['main_info'] = $this->adminmodel->get_data();			
			$this->pages->admin_view($data);	
		}			

	}
	public function panel2(){			
		if($this->check->session_check()==true){
			$data['page_id'] = __FUNCTION__;
			$data['main_info'] = $this->adminmodel->get_data();			
			$this->pages->admin_view($data);	
		}
	}
	public function panel3(){		
		if($this->check->session_check()==true){
			$data['page_id'] = __FUNCTION__;
			$data['main_info'] = $this->adminmodel->get_data();			
			$this->pages->admin_view($data);	
		}

			}	
	public function published_delete(){		
		if (isset($_POST['publicate']))
    		$this->adminmodel->public_articles($this->check->check_checkboxes(),1);
		elseif (isset($_POST['unpublicate']))
    		$this->adminmodel->public_articles($this->check->check_checkboxes(),0);
    	elseif (isset($_POST['delete']))    		
    		$this->adminmodel->delete_articles($this->check->check_checkboxes());

		$this->pages->redirectTo('adminpagectrl/panel1');
						
	}

	public function exit_panel(){	
		session_start($_COOKIE['PHPSESSID']);		
		session_destroy();			
		$this->pages->redirectTo('adminsignctrl/login');
	}
}
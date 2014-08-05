<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages {
	public function admin_view($data){			
		$CI =& get_instance();
		$CI->load->view('admin/admin_header_view');
		switch($data['page_id']){
			case 'panel1': $CI->load->view('admin/article_list_view',$data);
				break;
			case 'panel2': $CI->load->view('admin/edit_article_view',$data);	
				break;
			case 'panel3': $CI->load->view('admin/settings_view');
				break;	
		}
	}
	public function redirectTo($page){
		header("Location: http://rap.int/ci_rap/index.php/$page");
	}



}

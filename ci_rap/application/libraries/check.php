<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check {
	public function session_check(){	
		$CI =& get_instance();			
		session_start();	
		if(isset($_SESSION['auth'])){
			if($_SESSION['auth']!='completed'){
				$CI->pages->redirectTo('adminsignctrl/login');				
			}else{
					return true;
				}
			}else{
				$CI->pages->redirectTo('adminsignctrl/login');
			}			
					
	}
	public function check_checkboxes(){
		if(!empty($_POST)){
			$id = $_POST['id'];
			  if(!empty($id)){			  
			    $N = count($id);
			    $result = array();
			    for($i=0; $i < $N; $i++)
			    {
			      array_push($result, $id[$i]);
			    }
			  }
			  unset($_POST);
			  return $result;
		}
	}


}
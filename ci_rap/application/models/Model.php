<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
    
    
    function get_data(){
        
        $q = $this->db->query('select * from articles');
        //$query = $this->db->query('show tables');
       return $q->result_array();
    }
    
    
    
    
    
    
    
    
}
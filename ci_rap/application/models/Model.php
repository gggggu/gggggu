<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
    
    
    function get_data($id){
        
        $q = $this->db->query("select * from articles where id=$id");
        //$query = $this->db->query('show tables');
       return $q->result_array();
    }
    
    
    
    
    
    
    
    
}
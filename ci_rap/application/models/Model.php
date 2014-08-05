<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
    
    
    function get_data($id){
        
        $q = $this->db->query("select * from articles where id=$id");
        //$query = $this->db->query('show tables');
       return $q->result_array();
    }
    
    function login($data){     
        $login= $data['login'];
        $password = $data['password'];
        $query = "select * from login where login='$login' and password='$password'";
        $result = $this->db->query($query);
        return $result->num_rows();      
    }
    function wrong_login($ip){
        $this->db->query("INSERT INTO `wrong_login`(`ip`) VALUES ('$ip')");
    }
    
    
    
    
    
    
    
    
}
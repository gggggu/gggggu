<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {
    public function __construct(){
        parent::__construct();
    }    
    function get_data(){        
        $query = $this->db->query("select * from articles");        
       return $query->result_array();
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
    function public_articles($id, $value){  
        if($id)
            foreach($id as $item){
                $this->db->query("UPDATE articles SET published={$value} WHERE id={$item}");
            }  
    }
    function delete_articles($id){        
        if($id)
            foreach($id as $item){
                $this->db->query("DELETE FROM articles WHERE id={$item}");
            }
    }
   
    
}
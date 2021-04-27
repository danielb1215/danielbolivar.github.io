<?php

 class profesionesModel extends CI_Model{


   public function getAll(){
    
     $result = $this->db->get('profesiones');
     $users = $result->result_array();

     return $users; 


   }
   

    public function insert($user){
    
    if ($this->db->insert('profesiones',$user)) {
    	return true;
    	
    } else{
    	return false;
    }

 
 }
 } 
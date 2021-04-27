<?php

 class Usuarios_Model extends CI_Model{


   public function getAll(){
    
     $result = $this->db->get('usuarios');
     $users = $result->result_array();

     return $users; 


   }
 
 public function insert($user){
    
    if ($this->db->insert('usuarios',$user)) {
    	return true;
    	
    } else{
    	return false;
    }

 
 }  
 



   public function obtener_id($id){
    
    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('id',$id);


   $consulta = $this->db->get();
   $resultado = $consulta->row();
   return $consulta;


   } 

   public function perfil($id){

   $this -> db -> select('*');
   $this -> db -> from('usuarios');
   $this -> db -> where('id', $id);
 
   $this -> db -> limit(1);
   $query =  $this->db->get(); 
   
   
  return $query;
   }

/*
   public function login($email,$clave){
   
    $this->db->select('id, email, clave');
    $this->db->from('usuarios'); 
    $this->db->where('email', $email);
    $this->db->where('clave', $clave);
    $this->db->limit(1);
       $query = $this->db->get();

   if($query->num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }

     





   }
   */

}




?>
<?php

Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('usuarios');
   $this -> db -> where('correo', $username);
   $this -> db -> where('clave', $password);
   $this -> db -> limit(1);
   $query =  $this->db->get(); 
   /*
   $consulta = $this->db->get();
   $resultado = $consulta->row();
   print_r($resultado);
   */
   


   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }

   
 }
}
?>
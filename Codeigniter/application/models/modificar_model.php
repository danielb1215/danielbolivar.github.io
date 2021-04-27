<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Modificar_Model extends CI_Model{


   public function select($id){
     
 $this->db->select('*');
 $this->db->from('usuarios');
 $this->db->where('id', $id);
 $result = $this->db->get();

   
     $users = $result->result_array();

     return $users; 


   }

   public function modificar($id){
   
       $datos = array (
 
   'foto' => $this->upload->file_name);

   $this->db->where('id', $id);
  $this->db->update('usuarios', $datos);



   }



   public function modificar_file($id){
   
       $datos = array (
 
   'file' => $this->upload->file_name);

   $this->db->where('id', $id);
  $this->db->update('usuarios', $datos);

 


   }

}


?>
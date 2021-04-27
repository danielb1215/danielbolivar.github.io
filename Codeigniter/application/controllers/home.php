<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()  
 {
   if($this->session->userdata('logged_in'))
   { 

    
     $session_data = $this->session->userdata('logged_in');
    /*  $data = array(
      'id' => $session_data['id'],
      'nombre' => $session_data['nombre'],
      'apellido' => $session_data['apellido'],
         'correo' => $session_data['correo'] ,
         'telefono' => $session_data['telefono'],
         'telefono2' => $session_data['telefono2'],
         'cedula' => $session_data['cedula'],
         'fecha_nacimiento' => $session_data['fecha_nacimiento'],
         'ciudad' => $session_data['ciudad'],
          'descripcion' => $session_data['descripcion'],
         'habilidades' => $session_data['habilidades'],
         'experiencia' => $session_data['experiencia']
      

      ); */

    $this->load->model('Modificar_Model','MM','true');

     $resultado = $this->MM->select($session_data['id']);
     $data['resultado'] = $resultado;
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>
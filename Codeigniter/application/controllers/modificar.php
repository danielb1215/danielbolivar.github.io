<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class modificar extends CI_Controller
{
public function index(){

	$this->load->view('home_view.php');
}
	
  public function editar($id){ 




   $datos = array (
 
   'nombre' => $this->input->post('nombre'),
   'apellido' => $this->input->post('apellido'),
    'correo' => $this->input->post('correo'),
    'cedula' => $this->input->post('cedula'),
    'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
    'telefono' => $this->input->post('telefono'),
    'telefono2' => $this->input->post('telefono2'),
    'ciudad' => $this->input->post('ciudad'),
    'descripcion' => $this->input->post('descripcion'),
    'habilidades' => $this->input->post('habilidades'),
    'experiencia' => $this->input->post('experiencia'),
    'estatus' => $this->input->post('estatus'),
    'cargo' => $this->input->post('cargo'));


  $this->db->where('id', $id);
  $this->db->update('usuarios', $datos);

           

    redirect('home');

  
  } 

}
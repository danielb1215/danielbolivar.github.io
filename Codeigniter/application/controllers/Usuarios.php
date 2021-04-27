<?php
class Usuarios extends CI_Controller{ 


	
  	
	public function Listado(){

     $this->load->model('Usuarios_model','UM','true');
     $datos['Usuarios'] = $this->UM->getAll();

    $this->load->view('usuariosView.php',$datos);
 
	}

	 function crear(){
  
    $this->load->model('Usuarios_model','UM','true');
     $datos['Usuarios'] = $this->UM->getAll();

    //$this->load->view('index.php',$datos);

    redirect(base_url());


}

public function guardar(){

   $usuario = array (
 
   	'nombre' => $this->input->post('nombre'),
    'apellido' => $this->input->post('apellido'),
   	'correo' => $this->input->post('email'),
    'clave' => $this->input->post('clave'),
    'cedula' => $this->input->post('cedula'),
    'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
   	'telefono' => $this->input->post('telefono'),
    'telefono2' => $this->input->post('telefono2'),
    'foto' => "avatar5.png",
     'descripcion' => "Inserte aca una descripcion para tener mayores posibilidades de ser escogido", 
     'habilidades' => "Inserte aca sus habilidades para tener mayores posibilidades de ser escogido",
     'experiencia' => "Inserte aca su experiencia laboral para tener mayores posibilidades de ser escogido",
     'cargo' => "Elija un cargo ",
     'estatus' => "1",
     'file' => "Inserte un Archivo..",
   	'ciudad' => $this->input->post('ciudad'));

$this->load->model('Usuarios_Model');
	if($this->Usuarios_Model->insert($usuario)){

		redirect(base_url());
	}
}

public function editar($id){

   $datos = array (
 
    'nombre' => $this->input->post('nombre'),
    'apellido' => $this->input->post('apellido'),
    'correo' => $this->input->post('email'),
    'cedula' => $this->input->post('cedula'),
    'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
    'telefono' => $this->input->post('telefono'),
    'telefono2' => $this->input->post('telefono2'),
    'ciudad' => $this->input->post('ciudad'));


  $this->db->where('id', $id);
  $this->db->update('usuarios', $datos);
    redirect('Usuarios/listado');
  
}


 public function modificar($id){

 	$data = array();
 	$this->load->model('Usuarios_Model');

 	$resultado = $this->Usuarios_Model->obtener_id($id);

 	$data['resultado'] = $resultado;
     

    $this->load->view('usuariosModificar.php',$data);

 
}

public function eliminar($id){

 $data = array();
 $this->load->model('usuarios_Model');
 $resultado = $this->usuarios_Model->obtener_id($id);
 $data['resultado'] = $resultado;
 $this->load->view('eliminar.php',$data);





}
public function borrar($id){

$this->db->delete('usuarios', array('id' => $id));
redirect('Usuarios/listado');

} 

public function entrar(){

  $this->load->view('login_view');


}

public function ingresar(){

  $email = $this->input->post('email');
  $clave = $this->input->post('clave');
 
  $this->load->model('Usuarios_Model');  
  $this->Usuarios_Model->validacion($email,$clave);

  redirect('usuarios/entrar');




} 


 public function perfiles($id){
 

      $data = array();
  $this->load->model('modificar_model');

  $resultado = $this->modificar_model->select($id);

  $data['resultado'] = $resultado;
      
     

    $this->load->view('perfiles_view',$data);
 
  


 }



}





?> 
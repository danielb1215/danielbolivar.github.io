<?php
/**
* 
*/
class Profesiones extends CI_Controller
{
	
	public function listar(){

	$this->load->model('profesionesModel','PM','true');
     $datos['Usuarios'] = $this->PM->getAll();

    $this->load->view('profesionesView.php',$datos);

    }


	 function crear(){
  
    $this->load->model('profesionesModel','PM','true');
     $datos['Usuarios'] = $this->PM->getAll();

    //$this->load->view('index.php',$datos);

    redirect(base_url());


}

public function guardar(){

   $usuario = array (
 
   	'nombre' => $this->input->post('nombre'),
    'abreviacion' => $this->input->post('abreviacion'),
   	);

$this->load->model('profesionesModel');
	if($this->profesionesModel->insert($usuario)){

		redirect('profesiones/listar');
	}
}




function login(){


	$this->load->view('insertar_profesiones');
}

}



?>
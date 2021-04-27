<?php

class File_Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

       
        public function do_upload($id)
        {
             
 
                         
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                    //echo "no";
                       // $this->load->view('home_view', $error);
                      redirect('home');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                      //  echo "si";
                      //$id = $this->input->post('userfile');
                       $this->load->model('modificar_model');
                       $this->modificar_model->modificar_file($id);
                       
                        redirect('home');
                }
        }
}
?>
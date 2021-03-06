<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_encuesta');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
		$this->session->unset_userdata('correo');
	    $this->session->unset_userdata('Nombres');
	    $this->session->unset_userdata('Apellidos');
	    $this->session->unset_userdata('Id');
		$this->load->view('v_index');
	}

	function ingresar() {
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
         try {
			$correo = $this->input->post('correo');
			$username = $this->M_encuesta->getDatosPersona($correo);
			$datos = $this->M_encuesta->getDatosCorreos($correo);
			if($datos[0]->contador == 0) {
				if(count($username) != 0) {
					if(strtolower($username[0]->Email) == strtolower($correo)) {
					$session = array('correo'    => $correo,
									 'Nombres'   => $username[0]->Nombres,
									 'Apellidos' => $username[0]->Apellidos,
									 'Id' 		 => $username[0]->Id);
	          		$this->session->set_userdata($session);
					$data['error'] = EXIT_SUCCESS;
					}
				}
			}
        }catch(Exception $e) {
           $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
}
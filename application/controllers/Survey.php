<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

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
		$this->load->view('v_survey');
	}

	function enviarEncuesta() {
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $valor 		 = $this->input->post('valor');
            $suggestions = $this->input->post('suggestions');
            $future 	 = $this->input->post('future');
            $rate 		 = $this->input->post('rate');
            $datos 		 = $this->M_encuesta->getDatosPersona("nora.hdz@hpe.com");
            print_r($datos[0]->Id);
            /*$arrayInsert = array('Suggestions'   => $suggestions);
            $this->M_encuesta->insertarDatos($arrayInsert, 'survey');*/
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
}
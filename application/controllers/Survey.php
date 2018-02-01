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
		if($this->session->userdata('correo') == null) {
			$newURL = 'Inicio';
			header('Location: '.$newURL);
		}
		$this->load->view('v_survey');
	}

	function enviarEncuesta() {
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $valor1 		 = $this->input->post('valor1');
            $valor2          = $this->input->post('valor2');
            $valor3          = $this->input->post('valor3');
            $valor4          = $this->input->post('valor4');
            $suggestions = $this->input->post('suggestions');
            $future 	 = $this->input->post('future');
            $rate 		 = $this->input->post('rate');
            $arrayInsert = array('Sesion'   => $valor1,
        						 'Topic'   => $valor1,
        						 'Future' => $suggestions,
        						 'Suggestions' => $future,
        						 'Useful' => $valor3[0],
        						 'rate' => $rate,
        						 'hotel' => $valor4[0],
        						 'transport' => $valor4[1],
        						 'restaurant' => $valor4[2],
        						 'food' => $valor4[3],
        						 'register' => $valor4[4],
        						 'schedule' => $valor4[5],
                                 'entertainment' => $valor4[6],
        						 'id_persona' => $this->session->userdata('Id'));

            $this->M_encuesta->insertarDatos($arrayInsert, 'answers');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
}
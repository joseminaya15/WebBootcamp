<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
		$datos = $this->M_encuesta->getEncuestados();
		$html = '';
		$cont = 1;
		foreach ($datos as $key) {
			$html .= '<tr class="tr-cursor-pointer tr-ver-info-solicitud" data-idSolicitud="'.$cont.'">
						<td class="text-center">'.$key->Email.'</td>
                        <td class="text-center">'.$key->Sesion.'</td>
                        <td class="text-center">'.$key->Topic.'</td>
                        <td class="text-center">'.$key->Future.'</td>
                        <td class="text-center">'.$key->Suggestions.'</td>
                        <td class="text-center">'.$key->Useful.'</td>
                        <td class="text-center">'.$key->rate.'</td>
                        <td class="text-center">'.$key->hotel.'</td>
                        <td class="text-center">'.$key->transport.'</td>
                        <td class="text-center">'.$key->restaurant.'</td>
                        <td class="text-center">'.$key->food.'</td>
                        <td class="text-center">'.$key->register.'</td>
                        <td class="text-center">'.$key->schedule.'</td>
                    </tr>';
            $cont++;
		}
		$data['html'] = $html;
		$this->load->view('v_report', $data);
	}
}
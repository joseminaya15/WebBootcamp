<?php

class M_encuesta extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function insertarDatos($arrayInsert, $tabla){
        $this->db->insert($tabla, $arrayInsert);
        $sol = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sol);
    }

    /*function updateDatos($arrayData, $id, $tabla){
        $this->db->where('Id'  , $id);
        $this->db->update($tabla, $arrayData);
        if ($this->db->trans_status() == false) {
            throw new Exception('No se pudo actualizar los datos');
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }*/

    function getDatosPersona($Email) {
        $sql = "SELECT *
                  FROM persons
                 WHERE Email = ?";
        $result = $this->db->query($sql, array($Email));
        return $result->result();
    }

    function getEncuestados() {
        $sql = "SELECT a.*,
                       p.Email
                  FROM answers a,
                       persons p
                WHERE p.Id = a.id_persona
                ORDER BY a.id_persona";
        $result = $this->db->query($sql);
        return $result->result();
    }

}
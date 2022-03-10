<?php

require_once './models/turnomodel.php';
require_once './models/profesionalmodel.php';
require_once './models/especialidadmodel.php';

class aApiController{

    public function __construct(){
        $this->turnosmodel = new turnomodel();
        $this->especialidadesmodel = new especialidadmodel();
        $this->profesionalesmodel = new profesionalmodel();
    }

    function getAllTurnos(){

        $turnos=$this->turnosmodel->getAllTurnos();
        if($turnos){
            $this->viewapi->response($turnos, 200);
        }
        else{
            $this->viewapi->response("turnos no disponibles", 204);
        }
    }

    function getTurnoByID($id){
        $turnos=$this->turnosmodel->getAllTurnosByID($id);
        if($turnos){
            $this->viewapi->response($turnos, 200);
        }
        else{
            $this->viewapi->response("El paciente no tiene turnos reservados", 204);
        }
    }

    function addProfesional(){
        $data = $this->getBody();
        $especialidad = $data->especialidad;
        $nombre = $data->nombre;
        $this->profesionalesmodel->addProfesional($especialidad, $nombre);
    }
}
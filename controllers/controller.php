<?php

require_once './models/especialidadmodel.php';
require_once './models/turnomodel.php';
require_once './models/profesionalmodel.php';


class controller{

public function __construct(){
    $this->authcontroller = new AuthController();
    $this->Turnos = new turnomodel;
    $this->Turnosview = new turnosview;
    $this->Especialidades = new especialidadmodel;
    $this->Profesionales = new profesionalmodel;
}

function showTurnos(){
    $allTurnos = $this->Turnos->getAllTurnos();
    $this->Turnosview->renderTurnos($allTurnos);
}

function filtrarTurnos($filtro){  //Filtrado por especialidad en la vista del tpl 
    $rol = $this->authcontroller->VerifyUserRol():
        if($rol){
            $AllTurnos = $this->Turnos->getAllTurnos();
            $AllProfesionales = $this->Profesionales->getAllProfesionales();
            $AllEspecialidades = $this->Especialidades->getAllEspecialidades();
            $this->Turnosview->renderTurnosAdmin($AllTurnos, $AllProfesionales, $AllEspecialidades, $filtro) //llevo las variables para comparar e imprimir en el tpl con comparaciones if
        }
        else{
            echo 'no tiene privilegios de administracion'
        }
    
}
function eliminarEspecialidad($id_especialidad){
    $rol = $this->authcontroller->VerifyUserRol():
        if($rol){
            $AllTurnos = $this->Turnos->getAllTurnos();
            $AllProfesionales = $this->Profesionales->getAllProfesionales();
            $AllEspecialidades = $this->Especialidades->getAllEspecialidades();

            foreach ($AllEspecialidades as $especialidad){
                foreach ($AllProfesionales as $profesional){
                    foreach($AllTurnos as $turnos){
                        if($especialidas->id == $profesional->id_especialidad && $profesional->id == $turnos->id_Profesional){

                        }
                        else{
                            $this->especialidadmodel->deleteEspecialidad($especialidad->id);
                        }
                    }
                    
                }
            }
        }

}


}




/*
class Turnos{
    function __construct(){
        $this->turnomodel = new Turnos();
    }
}
*/
<?php


require_once './models/especialidadmodel.php';
require_once './models/turnomodel.php';
require_once './models/profesionalmodel.php';

class profesionalmodel
{

    private $db_delcerro;

    public function __construct()
    {
        $this->db_delcerro = new PDO('mysql:host=localhost;' . 'dbname=db_delcerro;charset=utf8', 'root', '');
    }

    public function getAllProfesionales()
    {
        $query = $this->db_delcerro->prepare('SELECT * FROM PROFESIONAL');
        $query->execute();
        $allProfesionales = $query->fetchAll(PDO::FETCH_OBJ);
        return $allProfesionales;
    }

    function addProfesional($especialidad, $nombre)
    {
        $AllEspecialidades = $this->Especialidades->getAllEspecialidades();
        foreach ($AllEspecialidades as $especialidades) {
            if ($especialidades->especialidad = $especialidad) {
                $coincidencia = $especialidades->especialidad;
                $query = $this->db_delcerro->prepare('INSERT INTO PROFESIONAL (nombre, id_especialildad) VALUES (?,?)');
                $query->execute([$nombre, $coincidencia]);
            }
            else{
                echo 'La especialidad indicada no esta disponible, comuniquese con el administrador del sistema';
            }
        }
    }
}


/* 
PROFESIONAL(id: int; nombre: string, id_especialidad: int)

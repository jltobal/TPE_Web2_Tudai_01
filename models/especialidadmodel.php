<?php


class especialidadmodel
{
    

    private $db_delcerro;

    public function __construct()
    {
        $this->db_delcerro = new PDO('mysql:host=localhost;' . 'dbname=db_delcerro;charset=utf8', 'root', '');
    }

    public function getAllEspecialidades()
    {
        $query = $this->db_delcerro->prepare('SELECT * FROM ESPECIALIDAD');
        $query->execute();
        $allEspecialidades = $query->fetchAll(PDO::FETCH_OBJ);
        return $allEspecialidades;
    }
    
    function deleteEspecialidad($id){
        $query = $this->db_delcerro->prepare('DELETE * FROM ESPECIALIDAD WHERE id=?');
        $query->execute([$id]);
    }
}

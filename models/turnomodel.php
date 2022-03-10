<?php


class turnomodel
{

    private $db_delcerro;

    public function __construct()
    {
        $this->db_delcerro = new PDO('mysql:host=localhost;' . 'dbname=db_delcerro;charset=utf8', 'root', '');
    }

    public function getAllTurnos()
    {
        $query = $this->db_delcerro->prepare('SELECT * FROM TURNO');
        $query->execute();
        $allTurnos = $query->fetchAll(PDO::FETCH_OBJ);
        return $allTurnos;
    }

    public function getAllTurnosByID($id)
    {
        $query = $this->db_delcerro->prepare('SELECT * FROM TURNO WHERE dni_paciente=?');
        $query->execute([$id]);
        $allTurnosByID = $query->fetchAll(PDO::FETCH_OBJ);
        return $allTurnosByID;
    }
    
}

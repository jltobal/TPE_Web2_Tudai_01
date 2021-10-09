<?php

class model
{

    private $db_impresoras;

    public function __construct()
    {
        $this->db_impresoras = new PDO('mysql:host=localhost;' . 'dbname=db_impresoras;charset=utf8', 'root', '');
        //Llama al servidor y me crea un objeto con la respuesta.
    }

    function obtenerImpresoras($parametro)
    {
      /*  if ($parametro != 0) {
            $query = $this->db_impresoras->prepare('SELECT * FROM impresora JOIN modelo WHERE modelos =' . $parametro);
            $query += $this->db_impresoras->prepare('SELECT * FROM impresora JOIN modelo WHERE tipo =' . $parametro);
        } else if ($parametro >= 0) { //id numerico*/
            $query = $this->db_impresoras->prepare('SELECT * FROM impresora WHERE id_impresora=?');
            $query->execute([$parametro]);/*
        } else {
            $query = $this->db_impresoras->prepare('SELECT * FROM impresora JOIN modelo ON impresora.id_modelo_fk=modelo.id_modelo');
            $query->execute();
        }*/
        // 2. obtengo la respuesta de la DB
        $impresoras = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS las impres
        return $impresoras;
    }

}

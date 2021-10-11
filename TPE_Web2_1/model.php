<?php

class model
{

    private $db_impresoras;

    public function __construct()
    {
        $this->db_impresoras = new PDO('mysql:host=localhost;' . 'dbname=db_impresoras;charset=utf8', 'root', '');
        //Llama al servidor y me crea un objeto con la respuesta.
    }

    function getPtinterByID($parametro)
    {
        $query = $this->db_impresoras->prepare('SELECT * FROM impresora WHERE id_impresora=?');
        $query->execute([$parametro]);
        $impresoras = $query->fetchAll(PDO::FETCH_OBJ);
        return $impresoras;
    }

    function getAllPrinters()
    {
        $query = $this->db_impresoras->prepare('SELECT * FROM impresora JOIN modelo ON impresora.id_modelo_fk=modelo.id_modelo');
        $query->execute();
        $allPrinters = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS las impresoras.
        return $allPrinters;
    }
    
    function getPtinterByFilter($filtro){        
    }


    function getUser($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?'); //Busco user en la BDD.
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
      }

    function registerUser($userEmail,$userPassword){
        $query = $this->db->prepare('INSERT INTO usuarios (email, password) VALUES (? , ?)');  //Guardo en la BDD.
        $query->execute([$userEmail,$userPassword]);
        echo "Registro exitoso";
    }
    
}

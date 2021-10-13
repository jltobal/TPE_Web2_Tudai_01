<?php

class model
{

    private $db_impresoras;

    public function __construct()
    {
        $this->db_impresoras = new PDO('mysql:host=localhost;' . 'dbname=db_impresoras;charset=utf8', 'root', '');
        //Llama al servidor y me crea un objeto con la respuesta.
    }

    function getPrinterByID($parametro)
    {
        $query = $this->db_impresoras->prepare('SELECT * FROM impresoras WHERE id_impresora=?');
        $query->execute([$parametro]);
        $impresoras = $query->fetchAll(PDO::FETCH_OBJ);
        return $impresoras;
    }

    function getAllPrinters()
    {
        $query = $this->db_impresoras->prepare('SELECT * FROM impresoras JOIN metodos ON impresoras.id_metodo_fk=metodos.id_metodo');
        $query->execute();
        $allPrinters = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS las impresoras.
        return $allPrinters;
    }
    
    function getPrinterByFilter($filtro){ 
           
        $query = $this->db_impresoras->prepare('SELECT * FROM metodos WHERE metodo=?');
        $query->execute([$filtro]);
        $impresoras = $query->fetch(PDO::FETCH_OBJ);
        var_dump($impresoras);
        return $impresoras;

    }


    function getUser($email) {
        $query = $this->db_impresoras->prepare('SELECT * FROM usuarios WHERE email = ?'); //Busco user en la BDD.
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
      }

    function registerUser($userEmail,$userPassword){
        $query = $this->db_impresoras->prepare('INSERT INTO usuarios (email, password) VALUES (? , ?)');  //Guardo en la BDD.
        $query->execute([$userEmail,$userPassword]);
        echo "Registro exitoso";
    }
    
}

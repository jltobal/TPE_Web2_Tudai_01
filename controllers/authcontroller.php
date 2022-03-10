<?php

class Authcontroller{
    function __construct()
    {
        if(session_status() !=PHP_SESSION_ACTIVE){
            session_start();
        }        
    }
}

function UserLoged(){  //verifico sesion
    
    if(isset($_SESSION['USER_ID'])){
        return true;
    }
    else{
        return false;
    }
}

function VerifyUserRol(){  //verifico rol de administrador
    if(isset($_SESSION['USER_ID'])){
        if(($_SESSION['USER_ROL']) == 'admin'){
            return true;
        }
        else{
            return false;
        }
    }
}
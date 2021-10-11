<?php

require_once 'model.php';
require_once 'view.php';

class authcontroller
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new model();
        $this->view = new view();
        $this->authHelper = new authhelper();
    }

    public function showLogin()
    {
        $this->view->mostrarLogin();  //Muestro formulario de Login.
    }

    public function showLogout()
    {
        $this->view->mostrarLogout(); //Mostrar logout.
    }

    public function login()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->obtenerUsuario();   // Busco el usuario en la BDD.

            if ($user && password_verify($password, $user->password)) { //Verifico si coincide el usuario y la contraseña.
                $this->authHelper->login($user);  //creo la sesion del usuario.
            } else {
                $this->view->mostrarLogin("Usiario o contraseña invalido.");
            }
        }
    }
}
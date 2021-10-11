<?php

require_once 'model.php';
require_once 'authhelper.php';
require_once 'view.php';

class AuthController
{
    private $model;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new model();
        $this->view = new view();
        $this->authHelper = new authHelper();
    }

    public function showLogin()
    {
        $this->view->renderLogin('Usuario o contraseña invalida.');  //Muestro formulario de Login.
    }

    public function showLogout()
    {
        $this->view->renderLogout(); //Mostrar logout.
    }

    public function login()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUser($email);   // Busco el usuario en la BDD.

            if ($user && password_verify($password, $user->password)) { //Verifico si coincide el usuario y la contraseña.
                $this->authHelper->login($user);  //creo la sesion del usuario.
            } else {
                $this->view->renderLogin("Usiario o contraseña invalido.");
            }
        }
    }
}
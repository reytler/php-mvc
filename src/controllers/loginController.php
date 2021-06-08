<?php
class loginController extends helperController
{
    public function index()
    {
        $this->loadTemplate('login');
    }

    public function logar()
    {

        $u = new Usuarios();

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        session_start();

        $u->login($email, $senha);


        if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
            header('Location: ' . BASE_URL);
        } else {
            header('Location: ' . BASE_URL . 'login/fail');
        }
    }

    public function sair()
    {
        $u = new Usuarios();
        session_start();
        $u->logout();
        header('Location: ' . BASE_URL);
    }

    public function fail()
    {
        $this->loadTemplate('fail');
    }
}

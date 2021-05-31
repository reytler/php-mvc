<?php
class cadastrarController extends helperController{
    public function index(){
        $this->loadTemplate('cadastrar');
    }

    public function sucesso($nome){
        $this->loadTemplate('sucesso', $nome);
    }

    public function incluir(){
        $u = new Usuarios();
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $u->cadastrar($nome, $email, $senha, $telefone);
        $nome = array(
            'nome' => $nome,
        );
        $this->sucesso($nome);
    }
}
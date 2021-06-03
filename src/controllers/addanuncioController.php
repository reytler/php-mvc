<?php
class addanuncioController extends helperController{
    public function index(){
        $dados = array();
        $c = new Categorias();
        $categorias = $c->getLista();
        $dados['categorias'] = $categorias;
        $this->loadTemplate('addanuncio',$dados);
    }

    public function adicionar(){
        $a = new Anuncios();

        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $estado = $_POST['estado'];

        $a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);
        $titleprd = array(
            'nome' => $titulo,
        );
        $this->sucesso($titleprd);
    }

    public function sucesso($titleprd){
        $this->loadTemplate('sucessoaddprd', $titleprd);
    }
}
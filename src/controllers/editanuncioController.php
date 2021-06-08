<?php
class editanuncioController extends helperController{
    public function index(){
        $dados = array();

        $c = new Categorias();
        $categorias = $c->getLista();
        $dados['categorias'] = $categorias;
        
        $a = new Anuncios();
        $id = $_GET['id'];
        $dados['info']=$a->getAnuncio($id);

        $info = $dados['info'];
        $idmycat = $info['id_categoria'];
        $mycat = $c->getCategoria($idmycat);
        $dados['mycat']=$mycat;

        $this->loadTemplate('editanuncio',$dados);
    }

    public function editar(){

        $a = new Anuncios();

        //checar se o usuário é dono do anúncio
        $id = $_GET['id'];
        $dados['info']=$a->getAnuncio($id);
        $info=$dados['info'];
        if($info['id_usuario']==$_SESSION['cLogin']){
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            $valor = $_POST['valor'];
            $descricao = $_POST['descricao'];

            if(empty($_POST['estado'])){
                $estado = 1;
            }else{
                $estado = $_POST['estado'];
            }

            $fotos = 0;

            $a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $id);

            $this->sucesso();
        }else{
            $this->loadTemplate('notpermitionedit');
        }
    }

    public function sucesso(){
        $this->loadTemplate('sucessoedit');
    }
}
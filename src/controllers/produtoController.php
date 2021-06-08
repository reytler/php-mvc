<?php
class produtoController extends helperController
{

    public function index()
    {
    }

    public function abrir($id)
    {
        $dados = array();
        $user_id = $_SESSION['cLogin'];
        $a = new Anuncios();
        $u = new Usuarios();

        if (empty($id)) {
            header("Location: " . BASE_URL);
            exit;
        }
        $u->getNome($user_id);
        $info = $a->getAnuncio($id);
        $dados['info'] = $info;
        $dados['nome'] = $_SESSION['nome'];

        $this->loadTemplate('produto', $dados);
    }
}

<?php
class deleteanuncioController extends helperController
{
    public function index()
    {
        $dados = array();
        $a = new Anuncios();
        $id = $_GET['id'];

        $dados['anuncio'] = $a->getAnuncio($id);
        $anuncio = $dados['anuncio'];

        if ($_SESSION['cLogin'] != $anuncio['id_usuario']) {
            $this->loadTemplate('notpermitionedit', $dados);
        } else {
            $this->confirmar($id);
        }
    }

    public function confirmar($id)
    {
        $dados = array();
        $a = new Anuncios();

        $dados['anuncio'] = $a->getAnuncio($id);
        $this->loadTemplate('confirmaexcluir', $dados);
    }

    public function excluir()
    {
        $a = new Anuncios();
        $id = $_GET['id'];

        $dados['anuncio'] = $a->getAnuncio($id);
        $anuncio = $dados['anuncio'];
        if ($_SESSION['cLogin'] != $anuncio['id_usuario']) {
            $this->loadTemplate('notpermitionedit', $dados);
        } else {
            $a->excluirAnuncio($id);
            header('Location: ' . BASE_URL . 'meusanuncios');
        }
    }
}

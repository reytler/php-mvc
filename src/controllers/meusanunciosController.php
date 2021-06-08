<?php
class meusanunciosController extends helperController
{
    public function index()
    {
        $dados = array();
        $a = new Anuncios();
        $dados['anuncios'] = $a->getMeusAnuncios();
        $this->loadTemplate('meusanuncios', $dados);
    }
}

<?php

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;
use sistema\Modelo\PostModelo;
use sistema\Nucleo\Helpers;
use sistema\Modelo\CategoriaModelo;


class SiteControlador extends Controlador
{

    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index():void
    {
        $posts = (new PostModelo())->busca();

        echo $this->template->renderizar('index.html', [
            'posts' => $posts,
            'categorias' => $this->categorias(),
        ]);
    }

    public function post(int $id):void
    {
        $post = (new PostModelo())->buscaPoId($id);

        if (!$post) {
            Helpers::redirecionar('404');
        }

        echo $this->template->renderizar('post.html', [
            'post' => $post,
            'categorias' => $this->categorias(),
        ]);
    }

    public function categorias()
    {
        return (new CategoriaModelo())->busca();
    }

    public function sobre():void
    {
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'Página Sobre',
            'subtitulo' => 'Teste de Subtitulo Sobre'
        ]);
    }

    public function erro404():void
    {
        echo $this->template->renderizar('404.html', [
            'titulo' => 'Página não encontrada'
        ]);
    }
}
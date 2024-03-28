<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

/**
 * Classe PostModelo
 * 
 * @author Ramon Noleto
 */
class CategoriaModelo
{
    public function busca():array
    {
        $query = "SELECT * FROM categorias WHERE status = 1 ORDER BY titulo ASC";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        
        return $resultado;
    }

    public function buscaPoId(int $id): bool|object
    {
        $query = "SELECT * FROM posts WHERE id = {$id}";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetch();
        
        return $resultado;
    }
}
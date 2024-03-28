<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

/**
 * Classe PostModelo
 * 
 * @author Ramon Noleto
 */
class PostModelo
{
    public function ler(int $id = null):array
    {
        $where = ($id ? "WHERE id = {$id}": '');

        $query = "SELECT * FROM posts {$where}";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        
        return $resultado;
    }
}
<?php
/**
 * @author Ramon Ribeiro Noleto <devnoleto@gmail.com>
 */
class Mensagem 
{
    private $texto;
    private $css;

    /**
     * Método responsavel pela rendereização
     * @return string
     */
    public function rendereizar(): string
    {
        return $this->texto = $this->filtrar('<h1>mensagem de teste</h1>');
    }
    //Só pode ser chamada dentro da class Mensagem
    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }

}


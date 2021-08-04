<?php


class Comentario{

    private $conteudo;
    private $gostos;

    /**
     * @return mixed
     */
    public function getGostos()
    {
        return $this->gostos;
    }

    /**
     * @param mixed $gostos
     */
    public function setGostos($gostos)
    {
        $this->gostos = $gostos;
    }

    /**
     * @return mixed
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * @param mixed $conteudo
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }


}
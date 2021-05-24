<?php

namespace sarassoroberto\usm\entity;

class Interesse
{

    private $InteresseId;
    private $nome;

    public function __construct($InteresseId, $nome)
    {
        $this->InteresseId = $InteresseId;
        $this->nome = $nome;
    }


    /**
     * Get the value of InteresseId
     */
    public function getInteresseId()
    {
        return $this->InteresseId;
    }

    /**
     * Set the value of InteresseId
     *
     * @return  self
     */
    public function setInteresseId($InteresseId)
    {
        $this->InteresseId = $InteresseId;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

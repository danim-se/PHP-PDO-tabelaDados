<?php

namespace App\Model;


class Aluno {
    private $id;
    private $nome;
    

    public  function setId($id){
        $this->id = $idA;
    }

    public function getId(){
        return $this->id;
     }

     public  function setNome($nome){
        $this->nome = $nomeA;
     }

     public  function getNome(){
        return $this->nome;
     }



     public function __toString(): String
     {
        return $this->nome." Id ".$this->id ;
     }

}
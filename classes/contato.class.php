<?php
class Contato{
    private $nome;
    private $telefone;
    private $email;

    public function setContato(string $nome, string $telefone, string $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }
    public function getContato(){
        return "Nome: {$this->nome}, Telefone: {$this->telefone}, Email: {$this->email}";
    }

}
?>
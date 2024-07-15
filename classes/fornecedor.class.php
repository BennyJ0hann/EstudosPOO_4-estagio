<?php
class Fornecedor{
    private $codigo;
    private $razaoSocial;
    private $endereco;
    private $cidade;
    private $contato;
    public function construtor(int $codigo,string $razaoSocial,string $endereco,string $cidade){
        $this->codigo = $codigo;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
    }
    public function __construct(){
        $this->contato = new Contato;
    }



    public function setContato(string $nome, string $telefone, string $email){
        $this->contato->setContato($nome,$telefone,$email);
    }
    public function getContato(){
        return $this->contato->getContato();
    }



    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo(int $codigo){
            $this->codigo = $codigo;
    }

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }
    public function setRazaoSocial(string $razaoSocial){
            $this->razaoSocial = $razaoSocial;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco(string $endereco){
            $this->endereco = $endereco;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade(string $cidade){
            $this->cidade = $cidade;
    }

}
?>
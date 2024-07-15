<?php
class Produto{
    private $codigo;
    private $descricao;
    private $preco;
    private $quantidade;
    private $fornecedor;
    const MARGEM = 10;

    public function __construct(int $codigo,string $descricao,float $preco,float $quantidade,Fornecedor $fornecedor){
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->fornecedor = $fornecedor;
    }

    public function __call($metodo, $parametros){
        echo "Você executou o método : {$metodo}<br>";
        foreach($parametros as $key => $parametro){
            echo "Parâmetros $key: {$parametro}<br>";
        }
    }
    
    public function __get($propriedade){
        echo "Obtendo o valor de {$propriedade}: <br>";
        if ($propriedade === 'preco'){
            return $this->$propriedade * (1 + (self::MARGEM / 100));
        }
    }


    function imprimeEtiqueta(){
        print "Código: $this->codigo <br>";
        print "Descrição: $this->descricao <br>";
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo(int $codigo){
            $this->codigo = $codigo;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao(string $descricao){
            $this->descricao = $descricao;
    }

    public function getPreco(){
        return $this->preco;
    }
    public function setPreco(float $preco){
            $this->preco = $preco;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade(float $quantidade){
            $this->quantidade = $quantidade;
    }
    public function getFornecedor(){
        return $this->fornecedor->getCodigo();
    }
    public function setFornecedor(Fornecedor $fornecedor){
            $this->fornecedor = $fornecedor;
    }
}


?>
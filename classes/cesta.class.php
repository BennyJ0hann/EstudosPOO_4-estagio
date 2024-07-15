<?php
class Cesta{
    private $itens;
    public function acidionaItem(Produto $item){
        $this->itens[] = $item;
    }
    public function exibeLista(){
        foreach($this->itens as $item){
            $item->imprimeEtiqueta();
        }
    }
    public function calculaTotal(){
        foreach($this->itens as $item){
            $total += $item->getPreco();
        }
        return 'R$ '. $total;
    }
}

?>
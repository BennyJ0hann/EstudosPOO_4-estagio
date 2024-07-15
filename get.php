<?php
include_once 'classes/Produto.class.php';
include_once 'classes/fornecedor.class.php';
include_once 'classes/contato.class.php';


$fornecedor = new Fornecedor;
$fornecedor->setContato('Mauro','51 1234-5678', 'mauro@gmail.com.br');
$fornecedor->construtor(848, 'Bom Costo Alimentos S.A.','Rua Ipirança','Poços de Caldas');

$produto = new Produto(1,'Pendrive 512Mb', 345.67, 1.0, $fornecedor);


echo $produto->preco;
?>
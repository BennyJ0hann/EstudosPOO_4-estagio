<?php
include_once 'classes/fornecedor.class.php';
include_once 'classes/Produto.class.php';
include_once 'classes/contato.class.php';


$fornecedor = new Fornecedor;
$fornecedor->setContato('Mauro','51 1234-5678', 'mauro@gmail.com.br');
$fornecedor->construtor(848, 'Bom Costo Alimentos S.A.','Rua Ipirança','Poços de Caldas');

$produto = new Produto(462,'Doce de Pêssego', 1.24, 1.0, $fornecedor);

echo 'Código :'. $produto->getCodigo() .'<br>';
echo 'Descrição :'. $produto->getDescricao() .'<br>';
echo 'Código :'. $fornecedor->getCodigo() .'<br>';
echo 'Razão Social :'. $fornecedor->getRazaoSocial() .'<br>';

?>
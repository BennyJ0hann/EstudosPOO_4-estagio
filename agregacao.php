<?php
include_once 'classes/fornecedor.class.php';
include_once 'classes/cesta.class.php';
include_once 'classes/Produto.class.php';
include_once 'classes/contato.class.php';


$fornecedor = new Fornecedor;
$fornecedor->setContato('Mauro','51 1234-5678', 'mauro@gmail.com.br');
$fornecedor->construtor(848, 'Bom Costo Alimentos S.A.','Rua Ipirança','Poços de Caldas');

$produto1 = new Produto(1,'Ameixa', 1.40, 1.0, $fornecedor);
$produto2 = new Produto(2,'Morango', 2.24, 1.0, $fornecedor);
$produto3 = new Produto(3,'Abacaxi', 2.86, 1.0, $fornecedor);
$produto4 = new Produto(4,'Laranja', 1.14, 1.0, $fornecedor);

$cesta = new Cesta;
$cesta->acidionaItem($produto1);
$cesta->acidionaItem($produto2);
$cesta->acidionaItem($produto3);
$cesta->acidionaItem($produto4);

echo $cesta->calculaTotal();
echo '<br>';
echo $cesta->exibeLista();

?>
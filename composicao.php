<?php
include_once 'classes/fornecedor.class.php';
include_once 'classes/contato.class.php';

$fornecedor = new Fornecedor;
$fornecedor->setContato('Mauro','51 1234-5678', 'mauro@gmail.com.br');
$fornecedor->construtor(848, 'Bom Gosto Alimentos S.A.','Rua Ipirança','Poços de Caldas');

echo $fornecedor->getRazaoSocial() . '<br>';
echo 'Informações de Contato <br>';
echo $fornecedor->getContato();

?>
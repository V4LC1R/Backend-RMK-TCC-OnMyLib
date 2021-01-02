<?php

include_once '../model/Pecas.php';

$peca = new Pecas();
/*
$peca->create([
    "nome_peca"=>'Voador',
    "marca"=>1,
    "preco"=>'0,00',
    "cod"=>'x10agD'
])
*/
//$peca->findAll();

var_dump($peca->findAll());
?>
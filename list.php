<?php
require_once('function.php');

$objeto1 = new DBConnect(); 


if ($objeto1->listar_candidato()){
    print("Lista de candidatos! ...");
};

unset($objeto1);

$objeto1 = new DBConnect(); 
?>
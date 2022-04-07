<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome');

if($nome) {
    
   echo "Olá ". $_SESSION['nome'] = $nome ." - " ."<a href=''>Sair<a>";
}
else {
    
    header("Location: index.php");
    exit;
}
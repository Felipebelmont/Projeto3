<?php 
require "conexao.php";
session_start();
$code = $_SESSION ['code'];
$senha = $_SESSION ['senha'];
$nome = $_SESSION ['status'];
$painel = $_SESSION ['painel'];
if ($senha == ''){
echo "<script language='javascript'> window.location='../index.php';</script>";
}
else if ($senha == ''){
echo "<script language='javascript'> window.location='../index.php'';</script>";
}
else if ($senha == ''){
    echo "<script language='javascript'> window.location='../index.php'';</script>";
} else {
    
}


?>
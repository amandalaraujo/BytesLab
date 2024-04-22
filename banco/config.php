<?php 
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'byteslab';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  // if($conexao->connect_errno){
  //   echo "Erro";
  // } else {
  //   echo "conexão bem sucedida";
  // }
?> 
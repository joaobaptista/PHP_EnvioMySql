# PHP_EnvioMySql
Código em PhP que envia dados de um txt para o MySql 


<?php 
$conn = mysqli_connect('localhost','root','','gtfs');   //conexão ao banco de dados 

$open = fopen('routes.txt','r'); // fopen do arquivo txt


# PHP_EnvioMySql
Código em PhP que envia dados de um txt para o MySql 


Neste caso estou enviando dados de gtfs para o phpmyadmin via php.




<?php 
$conn = mysqli_connect('localhost','root','','gtfs');   //conexão ao banco de dados 

$open = fopen('routes.txt','r'); // fopen do arquivo txt


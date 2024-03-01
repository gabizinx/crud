<?php
$host = 'localhost';
$user = 'root';
$password = '';
$bd = 'sistema';

$conect = new mysqli( $host, $user, $password, $bd);
if(!$conect){
    echo 'erro na sua comunicar com o bd' .mysqli_connect_error();
}
else{
    echo 'sua comunicação com o bd foi efetuada com sucesso';
}
?>
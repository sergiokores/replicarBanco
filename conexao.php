<?php




$slave_host;
$slave_user;
$slave_password;
$slave_db;


//conecta ao Master
function conectaDB1() {
    $master_host='localhost';
    $master_user='root';
    $master_password='';
    $master_db='advocaciamaster';
    $banco1 = mysqli_connect($master_host,$master_user,$master_password,$master_db);

    if ($banco1) {
        echo '<br>Banco de Dados Master OK';
    } else {
        echo 'Desconectado';    
    }
    
    return $banco1;
}
//Conecta ao Slave
function conectaDB2() {
    
    $slave_host='localhost';
    $slave_user='root';
    $slave_password='';
    $slave_db='advocaciamaster';

    $banco2 = mysqli_connect($slave_host,$slave_user,$slave_password,$slave_db);

    if ($banco2) {
        echo '<br>Banco de Dados Slave OK';
    }else {
        echo 'Desconectado';    
    }
    return $banco2;
}


$master = conectaDB1();
$slave = conectaDB2();

<?php


require_once './querys.php';

function executar_atualizacao($master, $slave, $monta_query) {

//percorrendo a lista de querys e executando a atualização.
    foreach ($monta_query as $executa) {

        //guardar o select da tabela para preparar o insert().        
        $row = mysqli_query($master, $executa['select']);
        $rowMaster = mysqli_fetch_all($row);

        //trunca a tabela para inserir registros atualizados.
        mysqli_query($slave, $executa['truncate']);

        // cria os campos para completar a query insert.
        foreach ($rowMaster as $DB1) {
            $VALUES = "('" . implode($DB1, "','") . "')";
            mysqli_query($slave, $executa['insert'] . $VALUES);
        }
    }
    unset($master);
    unset($slave);
}

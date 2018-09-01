<?php

// tanto o $select quanto o $truncar e o $insere devem ter o mesmo nome de tabela
$querys = array('');
//primeiro faz o select no slave
$select_nome_da_Tabela = "insira a select desejada";
//depois trunca a mesma tabela no slave
$truncar_nome_da_tabela = "truncate table ----";
//depois insere
$insere_nome_da_tabela = "INSERT INTO nome_da_tabela (campos_da_tabela) VALUES";//não adicione nada depoi de Values

//repita a mesma sequencia se quiser mais tabelas sempre repetindo o mesmo nome nas tres...
$select_outra_Tabela = "insira a select desejada";
//depois trunca a mesma tabela no slave
$truncar_outra_tabela = "truncate table ----";
//depois insere
$insere_outra_tabela = "INSERT INTO nome_da_tabela (campos_da_tabela) VALUES";//não adicione nada depoi de Values

//e assim por diante
//===================================================================================================================


//nomeie as tabelas deta lista de acordo com as la de cima
$monta_query = array(
    'nome_da_tabela' => array(
        //não mude o indice, apenas as variaveis de acordo com os la de cima
        'select' => $select_nome_da_tabela,
        'truncate' => $truncar_nome_da_tabela,
        'insert' => $insere_nome_da_tabela),
    
    'outra_tabela' => array(
        'select' => $select_outra_Tabela,
        'truncate' => $truncar_outra_Tabela,
        'insert' => $insere_outra_Tabela),
    //e assim por diante conforme la em cima
);



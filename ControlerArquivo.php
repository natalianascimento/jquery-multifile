<?php

if (isset($_POST["submit"])) {
    salvarArquivo();
}

function salvarArquivo() 
{
    $totalArquivos = count($_FILES['arquivo']['name']);

    echo $totalArquivos;

    for ( $i=0 ; $i < $totalArquivos ; $i++ ) {

        $diretorio = "../jquery-multifile/Arquivos/";
        $novoDiretorio = $diretorio . time() .$_FILES['arquivo']['name'][$i];
        move_uploaded_file($_FILES['arquivo']['tmp_name'][$i],$novoDiretorio);
        header('Location: index.html');
        
    }

}
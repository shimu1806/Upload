<?php

    //print_r($_FILES['arquivo']);

    //Recebe arquivo
    $nomedoArquivo = $_FILES['arquivo']['name'];
    $caminhoraiz = $_FILES['arquivo']['tmp_name'];

    //encaminha para pasta
    $caminhosalvar = 'arquivos/'.$nomedoArquivo;
    

    if(move_uploaded_file($caminhoraiz, $caminhosalvar)){
        header("Location: index.php");
    }else{
        echo "Erro ao carregar o arquivo";
    }

?>
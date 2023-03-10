<?php 
    //Incluir a conexão criada em conexao.php
    include("conexao.php");

    //Preparando comando SQL
    $sql = "SELECT * FROM CURSOS";

    //Execução
    $executar = mysql_query($conexao, $sql);

    //Preparando JSON
    $cursos = [];
    $indice = 0;
    while($linha = mysql_fetch_assoc($executar)){
        $cursos[$indice]['idCurso'] = $linha['idCurso'];
        $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
        $cursos[$indice]['valorCurso'] = $linha['valorCurso'];
        $indice++;
    }
    //Encapsulando os dados no JSON
    json_encode(['cursos'=>$cursos]);
    var_dump($cursos);
?>
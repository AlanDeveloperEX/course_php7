<?php
    //SELECT SIMPLES COM TODAS AS INFOS DA TABELA
    require_once("config.php");

    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuarios");

    //echo json_encode($usuarios);
    //TEST COM OWN ARRAY
    $test = [

        ['img'       => 'rose', 'number'    => '1234'],
        ['img'       => 'lilo', 'number'    => '5678']

    ];

    echo '<br><br>';

    //echo json_encode($test);

    //SELECT BY ID

    $user = new User();

    $user->loadById(2);

    echo $user;

?>
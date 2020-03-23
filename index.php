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

    //echo '<br><br>';

    //echo json_encode($test);

    //SELECT ONE BY ID

    $user = new User();

    $user->loadById(2);

    //echo $user;

    //SELECT LIST BY TABLE
    $list = User::getList();

    //echo json_encode($list);

    //LOAD USER BY LOGIN AND PASSWORD

    $verifiedUser = new User();

    $verifiedUser->login("4544", "123465"); //hash and password by row table

    echo $verifiedUser;

?>
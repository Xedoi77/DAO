<?php

    require_once("config.php");

  $user = new Usuario();

  $user->loadById(3);

var_dump($user);

//   echo $user;
//   echo "<br>";

//   $lista = new Usuario();
//   $result = $lista->getList();
//   echo json_encode($result);

    // $search = Usuario::search("Pa");
    // echo json_encode($search);

    // $usuario = new Usuario();
    // $usuario->login("Patricia", "789");

    // echo $usuario;




?>
<?php

require_once ("config.php");

// $sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


// carega somente um usuario as proximas 3 linhas
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

// carrega uma lista de usuario as duas linhas abaixo
//$lista = Usuario::getList();
//echo json_encode($lista);

// carrega uma lista de usuario buscando pelo login, as proximas duas linhas
//$search = Usuario::search("ro");
//echo json_encode($search);

//carega um usuario usando o login e a senha, as 3 proximas linhas
$usuario = new Usuario();
$usuario->login("root","123sabugo");
echo $usuario;

?>
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
//$usuario->login("root","123sabugo");
//echo $usuario;


// inserir um usuario no banco de dados, proximas 3 linhas
//$aluno = new Usuario("Idalina", "@fer123");
//$aluno->insert();
//echo $aluno;

// dando um update nas proximas 4 linhas
//$usuario = new Usuario();
//$usuario->loadById(7);
//$usuario->update("Marcelo Jr","123uello");
//echo $usuario;

$usuario = new Usuario();
//$usuario->loadById(7);
$usuario->delete(3);
echo $usuario;


?>
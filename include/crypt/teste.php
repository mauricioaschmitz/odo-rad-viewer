<?php
include_once("Crypt.class.php");
$password = "rhcp1983";
$hash = crypt::hash($password);
//Hash possui 60 digitos, melhor guardar em um Char(60) no banco
echo $hash."<br>";
//Senha, hash salvo retorna boolean =)
print_r(crypt::check($password, $hash));
?>
<?php
$nome= filter_input(INPUT_POST, "nome");
$email=filter_input(INPUT_POST, "email");
$descricao=filter_input(INPUT_POST, "descricao");
$fone=filter_input(INPUT_POST, "fone");
echo "Nome: ".$nome;<br>
echo "Email: ".$email;
echo "Descrição: ".$descricao;
echo "Fone: ".$fone;

?>
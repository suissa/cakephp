<?php 
//Adiciono as variaveis de configuração
include "config.php";
//Adiciono os scripts javascript necessários
echo $this->Html->script("yepnope.js");
echo $this->Html->script("base_".$__controller.".js");

//Adiciono o elemento MENU
echo $this->element("menu.php");

//Mostra o formulario
include "form.php";

//Mostra a listagem dos registros
include "listagem.php";
?>
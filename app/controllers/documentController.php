<?php
require '../models/document.php';
if(isset($_POST)){
	$codigo = $_POST['cod_valida'];
}
$document = new Document();
echo $document->getByCode($codigo);

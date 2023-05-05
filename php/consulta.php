<?php
if(isset($_POST)){
	$codigo = $_POST['cod_valida'];
}
require_once 'conexion.php';
$select="SELECT ty.doc_description,cd.num_doc,cd.siglas FROM code_doc cd INNER JOIN type_doc ty ON ty.id_type_doc = cd.doc_type where cod_valida ='$codigo'";
$resultado=$db->query($select);
if($resultado->num_rows > 0){
    while ($result = mysqli_fetch_array($resultado)) {
        $message = array(
            'consulta'=>'Encontrado',
            'opcion'=>1,
            'tipo'=>$result['doc_description'],
            'siglas'=>$result['siglas'],
            'num'=>$result['num_doc']
        );
     }
	echo json_encode($message);
}else{
    $message = array(
        'consulta'=>'Por favor ingrese correctamente el codigo',
        'opcion'=>0,
    );
    echo json_encode($message);
}
<?php
require_once '../models/dbModel.php';
class Document{
    public static function getByCode($codigo){
        $conect = new dataBase();
        $db = $conect->conect();
        $stamt = $db->query("SELECT ty.doc_description,cd.num_doc,cd.siglas FROM code_doc cd INNER JOIN type_doc ty ON ty.id_type_doc = cd.doc_type where cod_valida = '$codigo'");
        if($stamt->num_rows > 0){
            while ($result = mysqli_fetch_array($stamt)) {
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
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticidad e Integridad - VALIDA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row p-4">
                <div class="col-md-2 text-center text-lg-start">
                    <img src="img/icono.ico" alt="MUNICIPALIDAD PROVINCIAL DE PASCO" class="img-fluid">
                </div>
                <div class="col-md-5 p-3 my-3">
                    <h3 class="text-center">VALIDACION DE DOCUMENTOS DEL SISTEMA DE GESTION DOCUMENTAL</h3>
                </div>
                <div class="col-md-5 p-4 bg-white">
                    <form id="valida_form">
                        <div class="form-row d-flex justify-content-center">
                                <h5 class="text-center">VALIDE DOCUMENTO</h5>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="codeInput">Ingrese Codigo de Documento</label>
                                <input type="text" class="form-control" name="cod_valida" aria-describedby="emailHelp" placeholder="Codigo de Documento">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-warning  btn-block text-white" value="INGRESAR">
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/code_form.js"></script>
</body>
</html>
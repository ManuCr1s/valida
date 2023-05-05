$(document).ready(function(){
    let form_id= $('#valida_form');
    function generarTabla(item){
        var html = '<table>' +
               '<thead>' +
                 '<tr>' +
                   '<th>Tipo</th>' +
                   '<th>Siglas</th>' +
                 '</tr>' +
               '</thead>' +
               '<tbody>';
        html += '<tr>' +
                    '<td>' + item.tipo + '</td>' +
                    '<td>' + item.siglas + '</td>' +
                '</tr>';    
        html += '</tbody>' +
                '</table>';    
        return html;
    }
    form_id.on('submit',function(event){
        event.preventDefault();
        let dates = $(this).serialize();
        $.ajax({
            url:'php/consulta.php',
            type:'POST',
            data:dates,
            success:function(response){
                console.log(response);
                var response = jQuery.parseJSON(response);
                if(response.opcion == 1){
                    swal({
                        title: "¡Validacion exitosa!",
                        text: response.consulta+' '+response.tipo+' N°'+response.num+response.siglas+' '+'; documento validado por la Honorable Municipalidad de Pasco',
                        icon: "success",
                        button: "Ingrese Nuevo codigo",
                      }).then(function(){
                        window.location.href = window.location.href;;
                      });
                }else{
                    swal({
                        title: "Upps ah ocurrido un problema",
                        text: response.consulta,
                        icon: "warning",
                        buttons: "Ingrese Nuevo codigo",
                      })
                      .then(() => {
                        window.location.href = window.location.href;;
                      });
                }              
            },
            error:function(error){
                console.log(error.response);
            }
        });
    })
});
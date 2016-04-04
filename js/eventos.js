$(document).ready(function () {
    $(document).on("change", ".curso", function () {
        console.log();
        $(".contenedor").css("background-color", "white");
        $(this).closest(".contenedor").css("background-color", "#222");
    });
    $(document).on("click", "#registrar_postulacion", function () {
        var nombres = $("#nombre").val();
        var apellidos = $("#apellido").val();
        var cedula = $("#cedula").val();
        var email = $("#email").val();
        var telefono = $("#telefono").val();
        var comentario = $("#comentario").val();
        var curso = "";
        var cont=0;
        $(".curso").each(function (k) {
            if ($(this).is(":checked")){
                curso=$(this).data("id");
                cont++;
            }
        });
        if (cont!=1){
            alert("Debe seleccionar un curso");
            return
        }
        if (!confirm("¿Está seguro de postularse en el curso seleccionado?")){
            return;
        }
        $.ajax({
            url     :"php/controlador_cursos.php",
            data    : {band:"registrar_postulacion",curso:curso,nombres:nombres,apellidos:apellidos,cedula:cedula,email:email,telefono:telefono, comentario:comentario},
            dataType:"json",
            type    :"post",
            error   : function(resp){
                alert("!Ha ocurrido un error!");
                console.log(resp);
            },
            success:function(response) {
                console.log(response);
                if (response==1){
                    alert("Su solicitud ha sido registrada, estaremos contactándolos en la brevedad posible.");
                    location.reload();
                }
            }
        });
    });

});
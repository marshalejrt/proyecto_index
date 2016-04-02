$(document).ready(function () {
    $(document).on("change", ".curso", function () {
        console.log();
        $(".contenedor").css("background-color", "white");
        $(this).closest(".contenedor").css("background-color", "#222");
    });
    $(document).on("click", "#registrar_postulacion", function () {
        var nombres = $("#nombre").val();
        var apellido = $("#apellido").val();
        var cedula = $("#cedula").val();
        var email = $("#email").val();
        var telefono = $("#telefono").val();
    });

});
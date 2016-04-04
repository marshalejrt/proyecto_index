<?php
include_once 'modelo_cursos.php';
$cursos = new Cursos();
$band=$_REQUEST["band"];
switch ($band){
    case 'registrar_postulacion':
        $nombres=$_REQUEST["nombres"];
        $apellidos=$_REQUEST["apellidos"];
        $cedula=$_REQUEST["cedula"];
        $email=$_REQUEST["email"];
        $telefono=$_REQUEST["telefono"];
        $comentario=$_REQUEST["comentario"];
        $curso=$_REQUEST["curso"];
        echo json_encode($cursos->registrar_postulacion($nombres,$apellidos,$cedula,$email,$telefono,$comentario, $curso));
        break;
}
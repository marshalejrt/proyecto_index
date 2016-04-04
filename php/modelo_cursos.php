<?php
use clases_generales\Sql;

include_once 'parametros_bd.php';
include_once 'conexion.php';

class Cursos
{
    function Cursos()
    {
        $this->conex = new Sql();
        $this->conex->abrir_conexion();
    }

    function registrar_postulacion($nombres, $apellidos, $cedula, $email, $telefono, $comentario, $curso)
    {
        $sql = "INSERT INTO postulaciones_cursos (curso_id, nombre, apellido, email, cedula, telefono, comentario)
              VALUES ($curso,'$nombres','$apellidos','$email','$cedula','$telefono','$comentario')";
        $stm=$this->conex->consulta_bd($sql);
        return $this->conex->cantidad_registros_modificados($stm);
    }
}
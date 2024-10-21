<?php
interface IEmpleado {
  public function crearEmpleado($empleado);
  public function actualizarEmpleado($empleado);
  public function borrarEmpleado($idempleado);
  public function obtenerEmpleado();
  public function obtenerEmpleadosPorNombre($nombre);
  public function obtenerEmpleadosPorRol($rol);
}
?>
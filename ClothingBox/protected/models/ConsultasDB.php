<?php

public ConsultasDB()
{
	public function Guardar_Usuario($nombre, $apellido, $email, $username, $password)
	{
		$conexion = Yii::app()->db;

		$password = sha1($password);
		$consulta = "INSERT INTO usuarios(id, nombre, apellido, email, username, password) ";
		$consulta .= "VALUES (5, '$nombre', '$apellido', '$email', '$username', '$password')";

		echo $consulta;

		$resultado = $conexion->createCommand($consulta);
		$resultado->execute();
	}
}
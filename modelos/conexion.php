<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("serv-mysql-prueba.mysql.database.azure.com",
			            "rprueba@serv-mysql-prueba",
			            "pass_1234",
                        "Inventario");

		$link->exec("set names utf8");

		return $link;

	}

}

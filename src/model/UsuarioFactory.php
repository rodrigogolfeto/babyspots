<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 5:50 AM
 */

class UsuarioFactory extends AbstractFactory {

	private $table = "usuario";

	public function add($obj){

	}

	public function edit($obj){

	}

	public function find($obj){

		$query = "SELECT * FROM " . $this->table . " WHERE email = '" . $obj->email . "' AND senha = '" . $obj->senha . "';";

		try {
			$resultQuery = $this->db->query($query);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			return $this->queryRowsToListOfObjects($resultQuery, "Usuario");
		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
	}
}
<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 5:50 AM
 */

class UsuarioFactory extends AbstractFactory {

	private $table = "bs_usuario";

	public function add($obj){
		$sql_usuario_existe = "SELECT usu_email FROM " . $this->table;
		$sql_insere_usuario = "INSERT INTO " . $this->table . " (usu_nome, usu_email, usu_senha) VALUES ('" . $obj->getUsuNome() . "', '" . $obj->getUsuEmail() . "', '" . $obj->getUsuSenha() . "')";

		try {
			$result_query = $this->db->query($sql_usuario_existe);

			if(!($result_query instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			if($result_query->fetchColumn() == 0){
				return false;
			}

			return $this->db->exec($sql_insere_usuario);
		} catch(Exception $ex){
			echo $ex->getMessage();
		}
	}

	public function edit($obj){

	}

	public function find($obj){
		$query = "SELECT usu_id, usu_nome, usu_email, usu_senha, usu_imagem, usu_cadastro FROM " . $this->table . " WHERE usu_email = '" . $obj->getUsuEmail() . "' AND usu_senha = '" . $obj->getUsuSenha() . "';";

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
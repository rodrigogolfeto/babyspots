<?php
require_once ("Servico.php");
require_once ("AbstractFactory.php");
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 16/12/2017
 * Time: 4:18 PM
 */

class ServicoFactory extends AbstractFactory {

	private $tb_servico = "bs_servico";

	public function add($obj) {
		// TODO: Implement add() method.
	}

	public function edit($obj) {
		// TODO: Implement edit() method.
	}

	public function find($obj){
		// TODO: Implement find() method.
	}

	public function listar(){
		$sql = "SELECT ser_id, ser_nome, ser_classe, ser_cadastro FROM " . $this->tb_servico;

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			return $this->queryRowsToListOfObjects($resultQuery, "Servico");
		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
	}
}
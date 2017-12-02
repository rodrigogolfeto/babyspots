<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 5:47 AM
 */

class EstabelecimentoFactory extends AbstractFactory {

	private $nome_tabela = "estabelecimento";

	public function add($obj){

	}

	public function edit($obj){

	}

	public function find($param){

	}

	public function filtro($palavra, $avaliacao, $servico){

	}

	public function buscar($conteudo){
		$sql = "SELECT * FROM " . $this->nome_tabela . " WHERE nome_est ILIKE %" . $conteudo . "% OR rua ILIKE %" . $conteudo . "% ";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			return $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");
		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
	}

	public function listarEstabelecimentos(){

	}

	public function listarAvaliacoes(){

	}
}
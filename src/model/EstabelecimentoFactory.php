<?php
require_once ("Estabelecimento.php");
require_once ("AbstractFactory.php");
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 5:47 AM
 */

class EstabelecimentoFactory extends AbstractFactory {

	private $tb_estabelecimento = "estabelecimento";

	public function add($obj){

	}

	public function edit($obj){

	}

	public function find($param){

		$sql = "SELECT e.id_est, e.id_usu, e.nome, e.cep, e.rua, e.numero, e.complemento, e.bairro, e.cidade, e.estado, (SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est), (SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu) FROM " . $this->tb_estabelecimento . " e WHERE id_est = " . $param;

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

	public function filtro($palavra, $avaliacao, $servico){

	}

	public function buscar($conteudo){
		/*
		TODO
		- cria array de estabelecimento que esse array vai lá pra controller e depois view
		- select no banco e a cada linha vai adicionando o objetivo nessa lista de estabelecimento
		*/

		$sql = "SELECT e.id_est, e.id_usu, e.nome, e.cep, e.rua, e.numero, e.complemento, e.bairro, e.cidade, e.estado, (SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est), (SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu) FROM "	. $this->tb_estabelecimento . " e WHERE nome LIKE '%" . $conteudo . "%' OR rua LIKE '%" . $conteudo . "%' OR bairro LIKE '%" . $conteudo . "%' OR cidade LIKE '%". $conteudo . "%' OR estado LIKE '%" . $conteudo . "%'";

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

	public function listar(){
		$sql = "SELECT e.id_est, e.id_usu, e.nome, e.cep, e.rua, e.numero, e.complemento, e.bairro, e.cidade, e.estado, (SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est), (SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu) FROM " . $this->tb_estabelecimento . " e";

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

	public function listarTopEstabelecimentos(){
		$sql = "SELECT e.id_est, e.id_usu, e.nome, e.cep, e.rua, e.numero, e.complemento, e.bairro, e.cidade, e.estado, (SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est), (SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu), (SELECT AVG(ava.pontuacao)
  FROM avaliacao_servico ava, estabelecimento_servico ests, estabelecimento est where ava.id_ser = ests.id_ser and ests.id_est = est.id_est order by AVG(ava.pontuacao) desc) FROM " . $this->tb_estabelecimento . " e";

		/* SELECT AVG(ava.pontuacao)
  FROM avaliacao_servico ava, estabelecimento_servico ests, estabelecimento est where ava.id_ser = ests.id_ser and ests.id_est = est.id_est order by AVG(ava.pontuacao) desc, ava.pontuacao limit 6;*/

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
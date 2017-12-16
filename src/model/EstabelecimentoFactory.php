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
	private $tb_servico = "servico";
	private $tb_estabelecimento_servico = "estabelecimento_servico";

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

	public function buscar_por_servicos($conteudo) {
		$sql = "SELECT e.id_est, e.id_usu, e.nome, e.cep, e.rua, e.numero, e.complemento, e.bairro, e.cidade, e.estado, (SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est), (SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu) FROM "	. $this->tb_estabelecimento . " e";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){
				$sql = "SELECT id_ser, nome, classe FROM " . $this->tb_servico . " s INNER JOIN " . $this->tb_estabelecimento_servico . " es ON es.id_ser = s.id_ser			INNER JOIN " . $this->tb_estabelecimento . " e ON e.id_est = es.id_est WHERE e.id_est = " . $estabelecimentos->get($i)->getIdEst();
				$resultQuery = $this->db->query($sql);
				$estabelecimentos->get($i)->setServicos($this->queryRowsToListOfObjects($resultQuery, "Servico"));
			}

			return $estabelecimentos;
		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
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

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){
				$sql = "SELECT id_ser, nome, classe FROM " . $this->tb_servico . " s INNER JOIN " . $this->tb_estabelecimento_servico . " es ON es.id_ser = s.id_ser			INNER JOIN " . $this->tb_estabelecimento . " e ON e.id_est = es.id_est WHERE e.id_est = " . $estabelecimentos->get($i)->getIdEst();
				$resultQuery = $this->db->query($sql);
				$estabelecimentos->get($i)->setServicos($this->queryRowsToListOfObjects($resultQuery, "Servico"));
			}

			return $estabelecimentos;
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
	    $newQuery = 'SELECT AVG(pontuacao) FROM avaliacao_servico ser JOIN avaliacao aval ON (aval.id_ava = ser.id_ava) GROUP BY  id_est';
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
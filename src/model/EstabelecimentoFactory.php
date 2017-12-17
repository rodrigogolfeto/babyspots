<?php
require_once ("Estabelecimento.php");
require_once ("EstabelecimentoFoto.php");
require_once ("AbstractFactory.php");
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 5:47 AM
 */

class EstabelecimentoFactory extends AbstractFactory {

	private $tb_estabelecimento = "bs_estabelecimento";
	private $tb_servico = "bs_servico";
	private $tb_estabelecimento_servico = "bs_estabelecimento_servico";
	private $tb_estabelecimento_foto = "bs_estabelecimento_foto";
	private $tb_avaliacao_servico = "bs_avaliacao_servico";

	public function add($obj){

	}

	public function edit($obj){

	}

	public function find($idServico){
        $sql = "SELECT (SELECT AVG(avs_pontuacao) FROM bs_avaliacao_servico,bs_avaliacao WHERE avs_ava_id=ava_id AND avs_ava_id=ava_id AND ava_est_id=est_id) AS 'media',(SELECT COUNT(*) FROM bs_avaliacao WHERE ava_est_id=est_id GROUP BY est_id) AS 'quantidade',est_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado FROM bs_estabelecimento WHERE est_id='".$idServico."' LIMIT 1";

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
		$sql = "SELECT est_id, est_usu_id, est_nome, est_cep, est_rua, est_numero, est_complemento, est_bairro, est_cidade, est_estado, est_cadastro FROM "	. $this->tb_estabelecimento;

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");


			return $estabelecimentos;
		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
	}

	public function buscar($conteudo){

		$sql = "SELECT est_id, est_usu_id, est_nome, est_cep, est_rua, est_numero, est_complemento, est_bairro, est_cidade, est_estado, est_cadastro FROM "	. $this->tb_estabelecimento . " WHERE est_nome LIKE '%" . $conteudo . "%' OR est_rua LIKE '%" . $conteudo . "%' OR est_bairro LIKE '%" . $conteudo . "%' OR est_cidade LIKE '%". $conteudo . "%' OR est_estado LIKE '%" . $conteudo . "%'";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");

//			for ($i = 0; $i < count($estabelecimentos); $i++){
//				$sql = "SELECT id_ser, nome, classe FROM " . $this->tb_servico . " s INNER JOIN " . $this->tb_estabelecimento_servico . " es ON es.id_ser = s.id_ser			INNER JOIN " . $this->tb_estabelecimento . " e ON e.id_est = es.id_est WHERE e.id_est = " . $estabelecimentos->get($i)->getIdEst();
//				$resultQuery = $this->db->query($sql);
//				$estabelecimentos->get($i)->setServicos($this->queryRowsToListOfObjects($resultQuery, "Servico"));
//			}

			return $estabelecimentos;
		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
	}

	public function listar(){
		$sql = "SELECT est_id, est_usu_id, est_nome, est_cep, est_rua, est_numero, est_complemento, est_bairro, est_cidade, est_estado, est_cadastro, (SELECT AVG(ava.pontuacao), (SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est), (SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu) FROM " . $this->tb_estabelecimento . " e";

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

		$sql = "SELECT (SELECT AVG(avs_pontuacao) FROM bs_avaliacao_servico,bs_avaliacao WHERE avs_ava_id=ava_id AND avs_ava_id=ava_id AND ava_est_id=est_id) AS 'media',(SELECT COUNT(*) FROM bs_avaliacao WHERE ava_est_id=est_id GROUP BY est_id) AS 'quantidade',est_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado FROM bs_estabelecimento ORDER BY media DESC LIMIT 6";

		try {
			$resultQuery = $this->db->query($sql);
			
			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			//return $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery, "Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){

                //ADICIONA SERVICOS
				$sqlServico = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,ser_cadastro FROM bs_estabelecimento_servico,bs_servico WHERE ess_ser_id=ser_id AND ess_est_id='".$estabelecimentos[$i]->getEstId()."'";
                $resultQueryServico = $this->db->query($sqlServico);
                $servicos = $this->queryRowsToListOfObjects($resultQueryServico, "Servico");
                foreach ($servicos as $itemServico){
                    $estabelecimentos[$i]->adicionarServico($itemServico);
                }

                //ADICIONA IMAGENS
                $sqlImagem = "SELECT esf_imagem FROM bs_estabelecimento_foto WHERE esf_est_id='".$estabelecimentos[$i]->getEstId()."'";
                $resultQueryImagem = $this->db->query($sqlImagem);


                $imagens = $this->queryRowsToListOfObjects($resultQueryImagem, "EstabelecimentoFoto");
                foreach ($imagens as $itemImagem){
                    $estabelecimentos[$i]->adicionarImagem($itemImagem);
                }

			}

			return $estabelecimentos;
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
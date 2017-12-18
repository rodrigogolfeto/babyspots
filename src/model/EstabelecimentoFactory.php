<?php
require_once ("Estabelecimento.php");
require_once ("EstabelecimentoFoto.php");
require_once ("AbstractFactory.php");
require_once ("Avaliacao.php");
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

	public function find($idEstabelecimento){
        $sql = "SELECT (SELECT AVG(avs_pontuacao) FROM bs_avaliacao_servico,bs_avaliacao WHERE avs_ava_id = ava_id AND avs_ava_id = ava_id AND ava_est_id = est_id) AS 'media',(SELECT COUNT(*) FROM bs_avaliacao WHERE ava_est_id = est_id GROUP BY est_id) AS 'quantidade',est_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado FROM bs_estabelecimento WHERE est_id='" . $idEstabelecimento . "' LIMIT 1";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			$estabelecimento = $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");



			//ADICIONA SERVICOS
			$sqlServico = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,ser_cadastro,avs_pontuacao as 'nota' FROM bs_estabelecimento_servico,bs_servico,bs_avaliacao_servico WHERE ess_est_id = " . $estabelecimento[0]->getEstId() . " AND ess_ser_id = ser_id AND avs_ser_id = ser_id";
			$resultQueryServico = $this->db->query($sqlServico);
			$servicos = $this->queryRowsToListOfObjects($resultQueryServico,"Servico");
			foreach ($servicos as $itemServico){
				$estabelecimento[0]->adicionarServico($itemServico);
			}

			//TODO : ADICIONA IMAGENS


			//ADICIONA AVALIACOES
			$sqlAvaliacoes = "SELECT * FROM bs_avaliacao WHERE ava_est_id='".$estabelecimento[0]->getEstId()."'";
			$resultQueryAvaliacoes = $this->db->query($sqlAvaliacoes);
			$avaliacoes = $this->queryRowsToListOfObjects($resultQueryAvaliacoes,"Avaliacao");

			foreach ($avaliacoes as $itemAvaliacao){

				$mediaPontuacao = 0;
				$contador = 0;
				$somador = 0;

				//PEGA OS SERVIÇOS DA AVALIAÇÃO ATUAL E ADICIONA NO OBJETO DE AVALIAÇÕES
				$sqlServicoAvaliacao = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,avs_pontuacao FROM bs_avaliacao_servico,bs_servico WHERE avs_ser_id=ser_id AND avs_ava_id='".$itemAvaliacao->getAvaId()."'";
				$resultQueryServicoAvaliacao = $this->db->query($sqlServicoAvaliacao);
				$servicos_avaliacoes = $this->queryRowsToListOfObjects($resultQueryServicoAvaliacao,"Servico");
				foreach ($servicos_avaliacoes as $itemServico){
					$somador+=(int)$itemServico->getNota();
					$contador++;
					$itemAvaliacao->adicionarServico($itemServico);
				}

				//ADICIONAR A MÉDIA DE PONTUAÇÃO DE CADA AVALIAÇÃO
				if($contador>0){
					$mediaPontuacao = (int)($somador/$contador);
					$mediaPontuacao = ($mediaPontuacao < 1) ? 1 : $mediaPontuacao;
				}else{
					$mediaPontuacao = 1;
				}
				$itemAvaliacao->setNota($mediaPontuacao);

				//PEGA O OBJETO DE USUARIO DA AVALIAÇÃO E ADICIONA NO OBJETO DE AVALIAÇÃO
				$sqlAvaliacaoUsuario = "SELECT * FROM bs_usuario WHERE usu_id=".$itemAvaliacao->getAvaUsuId();
				$resultQueryAvaliacaoUsuario = $this->db->query($sqlAvaliacaoUsuario);
				$avaliacao_usuario = $this->queryRowsToListOfObjects($resultQueryAvaliacaoUsuario,"Usuario");
				$itemAvaliacao->setUsuario($avaliacao_usuario[0]);


				$estabelecimento[0]->adicionarAvaliacao($itemAvaliacao);
			}

			return $estabelecimento;

		} catch (Exception $ex) {
			echo $ex->getMessage();
			return null;
		}
	}

	public function filtro($palavra,$avaliacao,$servico){

	}

	public function buscar_por_servicos($servico) {
		$servicos = explode(',',$servico);
		//$palavra = $conteudo;

		$sql = "SELECT (SELECT AVG(avs_pontuacao) FROM bs_avaliacao_servico savs,bs_avaliacao sava WHERE savs.avs_ava_id=ava_id AND savs.avs_ava_id = sava.ava_id AND sava.ava_est_id = est_id) AS 'media',(SELECT COUNT(*) FROM bs_avaliacao sava2 WHERE sava2.ava_est_id=est_id GROUP BY est_id) AS 'quantidade',est_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado FROM bs_estabelecimento,bs_estabelecimento_servico,bs_servico WHERE est_id=ess_est_id AND ess_ser_id=ser_id AND ";
		$sql.= "(";

		//lista de servicos do filtro
		if(count($servicos)>1){
			for($i=0;$i<count($servicos);$i++){
				if($i==(count($servicos)-1)){
					$sql.= "ser_classe='".$servicos[$i]."'";
				}else{
					$sql.= "ser_classe='".$servicos[$i]."' OR ";
				}

			}
		}else{
			$sql.= "ser_classe='".$servicos[0]."'";
		}

		$sql.= ")  ";
		//$sql.= "AND (est_nome LIKE '%casa%' OR est_rua LIKE '%".$palavra."%' OR est_bairro LIKE '%".$palavra."%' OR est_cidade LIKE '%".$palavra."%' OR est_estado LIKE '%".$palavra."%' OR ser_nome LIKE '%".$palavra."%') ";
		$sql.= "GROUP BY est_id";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			//return $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){

				//ADICIONA SERVICOS
				$sqlServico = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,ser_cadastro,avs_pontuacao as 'nota',usu_nome FROM bs_estabelecimento_servico,bs_servico,bs_avaliacao_servico,bs_avaliacao,bs_usuario WHERE ess_ser_id = ser_id AND avs_ser_id = ser_id AND avs_ava_id=ava_id AND ava_usu_id=usu_id AND ess_est_id = " . $estabelecimentos[$i]->getEstId() . "";
				$resultQueryServico = $this->db->query($sqlServico);

				$servicos = $this->queryRowsToListOfObjects($resultQueryServico,"Servico");
				foreach ($servicos as $itemServico){
					$estabelecimentos[$i]->adicionarServico($itemServico);
				}

				//ADICIONA IMAGENS
				$sqlImagem = "SELECT esf_imagem FROM bs_estabelecimento_foto WHERE esf_est_id='".$estabelecimentos[$i]->getEstId()."'";
				$resultQueryImagem = $this->db->query($sqlImagem);

				$imagens = $this->queryRowsToListOfObjects($resultQueryImagem,"EstabelecimentoFoto");
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

	public function buscar($conteudo){

		$palavra = $conteudo;

		$sql = "SELECT (SELECT AVG(avs_pontuacao) FROM bs_avaliacao_servico savs,bs_avaliacao sava WHERE savs.avs_ava_id=ava_id AND savs.avs_ava_id = sava.ava_id AND sava.ava_est_id = est_id) AS 'media',(SELECT COUNT(*) FROM bs_avaliacao sava2 WHERE sava2.ava_est_id=est_id GROUP BY est_id) AS 'quantidade',est_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado FROM bs_estabelecimento,bs_estabelecimento_servico,bs_servico WHERE est_id=ess_est_id AND ess_ser_id=ser_id AND ";
		$sql.= "(est_nome LIKE '%casa%' OR est_rua LIKE '%".$palavra."%' OR est_bairro LIKE '%".$palavra."%' OR est_cidade LIKE '%".$palavra."%' OR est_estado LIKE '%".$palavra."%' OR ser_nome LIKE '%".$palavra."%') ";
		$sql.= "GROUP BY est_id";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			//return $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){

				//ADICIONA SERVICOS
				$sqlServico = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,ser_cadastro,avs_pontuacao as 'nota',usu_nome FROM bs_estabelecimento_servico,bs_servico,bs_avaliacao_servico,bs_avaliacao,bs_usuario WHERE ess_ser_id = ser_id AND avs_ser_id = ser_id AND avs_ava_id=ava_id AND ava_usu_id=usu_id AND ess_est_id = " . $estabelecimentos[$i]->getEstId() . "";
				$resultQueryServico = $this->db->query($sqlServico);

				$servicos = $this->queryRowsToListOfObjects($resultQueryServico,"Servico");
				foreach ($servicos as $itemServico){
					$estabelecimentos[$i]->adicionarServico($itemServico);
				}

				//ADICIONA IMAGENS
				$sqlImagem = "SELECT esf_imagem FROM bs_estabelecimento_foto WHERE esf_est_id='".$estabelecimentos[$i]->getEstId()."'";
				$resultQueryImagem = $this->db->query($sqlImagem);

				$imagens = $this->queryRowsToListOfObjects($resultQueryImagem,"EstabelecimentoFoto");
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

	public function buscar_servico_palavra($servico,$conteudo){

		$servicos = explode(',',$servico);
		$palavra = $conteudo;

		$sql = "SELECT (SELECT AVG(avs_pontuacao) FROM bs_avaliacao_servico savs,bs_avaliacao sava WHERE savs.avs_ava_id=ava_id AND savs.avs_ava_id = sava.ava_id AND sava.ava_est_id = est_id) AS 'media',(SELECT COUNT(*) FROM bs_avaliacao sava2 WHERE sava2.ava_est_id=est_id GROUP BY est_id) AS 'quantidade',est_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado FROM bs_estabelecimento,bs_estabelecimento_servico,bs_servico WHERE est_id=ess_est_id AND ess_ser_id=ser_id AND ";
		$sql.= "(";

		//lista de servicos do filtro
		if(count($servicos)>1){
			for($i=0;$i<count($servicos);$i++){
				if($i==(count($servicos)-1)){
					$sql.= "ser_classe='".$servicos[$i]."'";
				}else{
					$sql.= "ser_classe='".$servicos[$i]."' OR ";
				}

			}
		}else{
			$sql.= "ser_classe='".$servicos[0]."'";
		}

		$sql.= ") AND ";
		$sql.= "(est_nome LIKE '%casa%' OR est_rua LIKE '%".$palavra."%' OR est_bairro LIKE '%".$palavra."%' OR est_cidade LIKE '%".$palavra."%' OR est_estado LIKE '%".$palavra."%' OR ser_nome LIKE '%".$palavra."%') ";
		$sql.= "GROUP BY est_id";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			//return $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){

				//ADICIONA SERVICOS
				$sqlServico = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,ser_cadastro,avs_pontuacao as 'nota',usu_nome FROM bs_estabelecimento_servico,bs_servico,bs_avaliacao_servico,bs_avaliacao,bs_usuario WHERE ess_ser_id = ser_id AND avs_ser_id = ser_id AND avs_ava_id=ava_id AND ava_usu_id=usu_id AND ess_est_id = " . $estabelecimentos[$i]->getEstId() . "";
				$resultQueryServico = $this->db->query($sqlServico);

				$servicos = $this->queryRowsToListOfObjects($resultQueryServico,"Servico");
				foreach ($servicos as $itemServico){
					$estabelecimentos[$i]->adicionarServico($itemServico);
				}

				//ADICIONA IMAGENS
				$sqlImagem = "SELECT esf_imagem FROM bs_estabelecimento_foto WHERE esf_est_id='".$estabelecimentos[$i]->getEstId()."'";
				$resultQueryImagem = $this->db->query($sqlImagem);

				$imagens = $this->queryRowsToListOfObjects($resultQueryImagem,"EstabelecimentoFoto");
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

	public function listar(){
		$sql = "SELECT est_id,est_usu_id,est_nome,est_cep,est_rua,est_numero,est_complemento,est_bairro,est_cidade,est_estado,est_cadastro,(SELECT AVG(ava.pontuacao),(SELECT url_imagem FROM estabelecimento_foto ef WHERE e.id_est = ef.id_est),(SELECT nome_completo FROM usuario u WHERE u.id_usu = e.id_usu) FROM " . $this->tb_estabelecimento . " e ";

		try {
			$resultQuery = $this->db->query($sql);

			if(!($resultQuery instanceof PDOStatement)){
				throw new Exception("SQL Error!");
			}

			return $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");
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

			$estabelecimentos = $this->queryRowsToListOfObjects($resultQuery,"Estabelecimento");

			for ($i = 0; $i < count($estabelecimentos); $i++){

                //ADICIONA SERVICOS
				$sqlServico = "SELECT ser_id,ser_nome,ser_nome_min,ser_classe,ser_cadastro,avs_pontuacao as 'nota',usu_nome FROM bs_estabelecimento_servico,bs_servico,bs_avaliacao_servico,bs_avaliacao,bs_usuario WHERE ess_ser_id = ser_id AND avs_ser_id = ser_id AND avs_ava_id=ava_id AND ava_usu_id=usu_id AND ess_est_id = " . $estabelecimentos[$i]->getEstId() . "";
				$resultQueryServico = $this->db->query($sqlServico);

                $servicos = $this->queryRowsToListOfObjects($resultQueryServico,"Servico");
                foreach ($servicos as $itemServico){
                    $estabelecimentos[$i]->adicionarServico($itemServico);
                }

                //ADICIONA IMAGENS
                $sqlImagem = "SELECT esf_imagem FROM bs_estabelecimento_foto WHERE esf_est_id='".$estabelecimentos[$i]->getEstId()."'";
                $resultQueryImagem = $this->db->query($sqlImagem);

                $imagens = $this->queryRowsToListOfObjects($resultQueryImagem,"EstabelecimentoFoto");
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
}
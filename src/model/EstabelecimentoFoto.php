<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:41 PM
 */

class EstabelecimentoFoto {

	private $id_esf;
	private $id_est;
	private $url_imagem;
	private $data_cadastro;

	public function __construct($id_esf, $id_est, $url_imagem, $data_cadastro) {
		$this->id_esf = $id_esf;
		$this->id_est = $id_est;
		$this->url_imagem = $url_imagem;
		$this->data_cadastro = $data_cadastro;
	}

	public function getIdEsf() {
		return $this->id_esf;
	}

	public function setIdEsf($id_esf) {
		$this->id_esf = $id_esf;
	}

	public function getIdEst() {
		return $this->id_est;
	}

	public function setIdEst($id_est) {
		$this->id_est = $id_est;
	}

	public function getUrlImagem() {
		return $this->url_imagem;
	}

	public function setUrlImagem($url_imagem) {
		$this->url_imagem = $url_imagem;
	}

	public function getDataCadastro() {
		return $this->data_cadastro;
	}

	public function setDataCadastro($data_cadastro) {
		$this->data_cadastro = $data_cadastro;
	}
}
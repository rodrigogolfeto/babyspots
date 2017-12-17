<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:41 PM
 */

class EstabelecimentoFoto {

	private $esf_est_id;
	private $esf_imagem;
	private $esf_cadastro;

	public function __construct($esf_imagem) {
		$this->esf_imagem = $esf_imagem;
	}

	public function getEsfEstId() {
		return $this->esf_est_id;
	}

	public function setEsfEstId($esf_est_id) {
		$this->esf_est_id = $esf_est_id;
	}

	public function getEsfImagem() {
		return $this->esf_imagem;
	}

	public function setEsfImagem($esf_imagem) {
		$this->esf_imagem = $esf_imagem;
	}

	public function getEsfCadastro() {
		return $this->esf_cadastro;
	}

	public function setEsfCadastro($esf_cadastro) {
		$this->esf_cadastro = $esf_cadastro;
	}
}
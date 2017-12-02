<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:37 AM
 */

class Estabelecimento {
	private $id_est;
	private $id_usu;
	private $nome_est;
	private $data_cadastro;
	private $cep;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
	private $cidade;
	private $estado;
	private $avaliacao_geral;

	public function __construct($id_est, $id_usu, $nome_est, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado) {
		$this->id_est = $id_est;
		$this->id_usu = $id_usu;
		$this->nome_est = $nome_est;
		$this->cep = $cep;
		$this->rua = $rua;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->estado = $estado;
	}

	public function getIdEst() {
		return $this->id_est;
	}

	public function setIdEst($id_est) {
		$this->id_est= $id_est;
	}

	public function getIdUsu() {
		return $this->id_usu;
	}

	public function setIdUsu($id_usu) {
		$this->id_usu = $id_usu;
	}

	public function getNomeEstabelecimento() {
		return $this->nome_estabelecimento;
	}

	public function setNomeEst($nome_est) {
		$this->nome_est = $nome_est;
	}

	public function getDataCadastro() {
		return $this->data_cadastro;
	}

	public function setDataCadastro($data_cadastro) {
		$this->data_cadastro = $data_cadastro;
	}

	public function getCep() {
		return $this->cep;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function getRua() {
		return $this->rua;
	}

	public function setRua($rua) {
		$this->rua = $rua;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function getComplemento() {
		return $this->complemento;
	}

	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function getAvaliacaoGeral() {
		return $this->avaliacao_geral;
	}

	public function setAvaliacaoGeral($avaliacao_geral) {
		$this->avaliacao_geral = $avaliacao_geral;
	}
}
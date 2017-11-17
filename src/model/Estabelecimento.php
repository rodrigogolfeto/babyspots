<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:37 AM
 */

class Estabelecimento {
	private $id_estabelecimento;
	private $id_usuario;
	private $nome_estabelecimento;
	private $data_cadastro;
	private $cep;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
	private $cidade;
	private $estado;
	private $avaliacao_geral;

	public function __construct($id_estabelecimento, $id_usuario, $nome_estabelecimento, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado) {
		$this->id_estabelecimento = $id_estabelecimento;
		$this->id_usuario = $id_usuario;
		$this->nome_estabelecimento = $nome_estabelecimento;
		$this->cep = $cep;
		$this->rua = $rua;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->estado = $estado;
	}

	public function getIdEstabelecimento() {
		return $this->id_estabelecimento;
	}

	public function setIdEstabelecimento($id_estabelecimento) {
		$this->id_estabelecimento = $id_estabelecimento;
	}

	public function getIdUsuario() {
		return $this->id_usuario;
	}

	public function setIdUsuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	public function getNomeEstabelecimento() {
		return $this->nome_estabelecimento;
	}

	public function setNomeEstabelecimento($nome_estabelecimento) {
		$this->nome_estabelecimento = $nome_estabelecimento;
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
<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:37 AM
 */

class Estabelecimento {
	private $nome_estabelecimento;
	private $endereco; //objeto endereço
	private $descricao;
	private $avaliacao_geral;
	private $servicos = array(); //objetos de servicos
	private $fotos = array(); //strings de URLs
	private $usuario; //objeto do usuário que cadastrou o estabalecimento

	public function __construct($nome_estabelecimento, $endereco, $descricao, $avaliacao_geral, array $servicos, array $fotos, $usuario) {
		$this->nome_estabelecimento = $nome_estabelecimento;
		$this->endereco = $endereco;
		$this->descricao = $descricao;
		$this->avaliacao_geral = $avaliacao_geral;
		$this->servicos = $servicos;
		$this->fotos = $fotos;
		$this->usuario = $usuario;
	}

	public function getNomeEstabelecimento() {
		return $this->nome_estabelecimento;
	}

	public function setNomeEstabelecimento($nome_estabelecimento) {
		$this->nome_estabelecimento = $nome_estabelecimento;
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function getAvaliacaoGeral() {
		return $this->avaliacao_geral;
	}

	public function setAvaliacaoGeral($avaliacao_geral) {
		$this->avaliacao_geral = $avaliacao_geral;
	}

	public function getServicos() {
		return $this->servicos;
	}

	public function setServicos($servicos) {
		$this->servicos = $servicos;
	}

	public function getFotos() {
		return $this->fotos;
	}

	public function setFotos($fotos) {
		$this->fotos = $fotos;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}
}
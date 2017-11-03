<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:37 AM
 */

class Estabelecimento {
	/*
	"---" atributos já implementados
	"***" atributos NÃO implementados, à discutir

	---Nome do estabelecimento;
	---Endereço;
	---Descrição;
	---Avaliação geral do serviços do estabelecimento;

	***Os serviços oferecidos e suas avaliações;
	***Fotos;
	***Nome e foto de perfil do usuário que fez o cadastro do estabelecimento;
	*/

	private $nome_estabelecimento;
	private $endereco;
	private $descricao;
	private $avaliacao_geral;

	public function __construct($nome_estabelecimento, $endereco, $descricao, $avaliacao_geral) {
		$this->nome_estabelecimento = $nome_estabelecimento;
		$this->endereco = $endereco;
		$this->descricao = $descricao;
		$this->avaliacao_geral = $avaliacao_geral;
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
}
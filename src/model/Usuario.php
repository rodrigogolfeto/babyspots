<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:00 AM
 */

class Usuario {
	private $nome_completo;
	private $email;
	private $senha;
	private $endereco;

	function __construct($nome_completo, $email, $senha, $endereco) {
		$this->nome_completo = $nome_completo;
		$this->email = $email;
		$this->senha = $senha;
		$this->endereco = $endereco;
	}

	public function getNomeCompleto() {
		return $this->nome_completo;
	}

	public function setNomeCompleto($nome_completo) {
		$this->nome_completo = $nome_completo;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
}
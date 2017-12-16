<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:00 AM
 */

class Usuario {
	private $id_usu;
	private $nome_completo;
	private $email;
	private $senha;
	private $cidade;
	private $estado;
	private $foto_url;

	public function __construct($nome_completo) {
		$this->nome_completo = $nome_completo;
	}

	public function getIdUsuario() {
		return $this->id_usuario;
	}

	public function setIdUsuario($id_usuario) {
		$this->id_usuario = $id_usuario;
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

	public function getFotoUrl() {
		return $this->foto_url;
	}

	public function setFotoUrl($foto_url) {
		$this->foto_url = $foto_url;
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:00 AM
 */

class Usuario {
	private $usu_id;
	private $usu_nome;
	private $usu_email;
	private $usu_senha;
	private $usu_imagem;
	private $usu_cadastro;

	public function __construct($usu_id, $usu_nome, $usu_email, $usu_senha, $usu_imagem, $usu_cadastro) {
		$this->usu_id = $usu_id;
		$this->usu_nome = $usu_nome;
		$this->usu_email = $usu_email;
		$this->usu_senha = $usu_senha;
		$this->usu_imagem = $usu_imagem;
		$this->usu_cadastro = $usu_cadastro;
	}

	public function getUsuId() {
		return $this->usu_id;
	}

	public function setUsuId($usu_id) {
		$this->usu_id = $usu_id;
	}

	public function getUsuNome() {
		return $this->usu_nome;
	}

	public function setUsuNome($usu_nome) {
		$this->usu_nome = $usu_nome;
	}

	public function getUsuEmail() {
		return $this->usu_email;
	}

	public function setUsuEmail($usu_email) {
		$this->usu_email = $usu_email;
	}

	public function getUsuSenha() {
		return $this->usu_senha;
	}

	public function setUsuSenha($usu_senha) {
		$this->usu_senha = $usu_senha;
	}

	public function getUsuImagem() {
		return $this->usu_imagem;
	}

	public function setUsuImagem($usu_imagem) {
		$this->usu_imagem = $usu_imagem;
	}

	public function getUsuCadastro() {
		return $this->usu_cadastro;
	}

	public function setUsuCadastro($usu_cadastro) {
		$this->usu_cadastro = $usu_cadastro;
	}

}
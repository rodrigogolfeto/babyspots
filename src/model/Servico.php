<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:44 PM
 */

class Servico {

	private $ser_id;
	private $ser_nome;
    private $ser_classe;
    private $ser_cadastro;

	public function __construct($ser_id, $ser_nome, $ser_classe, $ser_cadastro) {
		$this->ser_id = $ser_id;
		$this->ser_nome = $ser_nome;
		$this->ser_classe = $ser_classe;
		$this->ser_cadastro = $ser_cadastro;
	}

	public function getSerId() {
		return $this->ser_id;
	}

	public function setSerId($ser_id) {
		$this->ser_id = $ser_id;
	}

	public function getSerNome() {
		return $this->ser_nome;
	}

	public function setSerNome($ser_nome) {
		$this->ser_nome = $ser_nome;
	}

	public function getSerClasse() {
		return $this->ser_classe;
	}

	public function setSerClasse($ser_classe) {
		$this->ser_classe = $ser_classe;
	}

	public function getSerCadastro() {
		return $this->ser_cadastro;
	}

	public function setSerCadastro($ser_cadastro) {
		$this->ser_cadastro = $ser_cadastro;
	}

}
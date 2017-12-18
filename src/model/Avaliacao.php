<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:42 PM
 */

class Avaliacao {

	private $ava_id;
	private $ava_est_id;
	private $ava_usu_id;
	private $ava_descricao;
	private $ava_cadastro;

	//OBJETOS E ATRIBUTOS ADICIONAIS
	private $usuario;
	private $nota;
	private $servicos;

	public function __construct($ava_id, $ava_est_id, $ava_usu_id, $ava_descricao, $ava_cadastro) {
		$this->ava_id = $ava_id;
		$this->ava_est_id = $ava_est_id;
		$this->ava_usu_id = $ava_usu_id;
		$this->ava_descricao = $ava_descricao;
		$this->ava_cadastro = $ava_cadastro;

		$this->servicos = array();
	}

	public function getAvaId() {
		return $this->ava_id;
	}

	public function setAvaId($ava_id) {
		$this->ava_id = $ava_id;
	}

	public function getAvaEstId() {
		return $this->ava_est_id;
	}

	public function setAvaEstId($ava_est_id) {
		$this->ava_est_id = $ava_est_id;
	}

	public function getAvaUsuId() {
		return $this->ava_usu_id;
	}

	public function setAvaUsuId($ava_usu_id) {
		$this->ava_usu_id = $ava_usu_id;
	}

	public function getAvaDescricao() {
		return $this->ava_descricao;
	}

	public function setAvaDescricao($ava_descricao) {
		$this->ava_descricao = $ava_descricao;
	}

	public function getAvaCadastro() {
		$data = date_create($this->ava_cadastro);
		return date_format($data, 'd/m/Y H:i');
	}

	public function setAvaCadastro($ava_cadastro) {
		$this->ava_cadastro = $ava_cadastro;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public function getNota() {
		return $this->nota;
	}

	public function setNota($nota) {
		$this->nota = $nota;
	}

	public function getServicos() {
		return $this->servicos;
	}

	public function setServicos($servicos) {
		$this->servicos = $servicos;
	}

	public function adicionarServico($servico){
		array_push($this->servicos,$servico);
	}
}
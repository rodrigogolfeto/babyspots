<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:42 PM
 */

class Avaliacao {

	private $id_ava;
	private $id_est;
	private $id_usu;
	private $descricao;

	public function __construct($id_ava, $id_est, $id_usu, $descricao) {
		$this->id_ava = $id_ava;
		$this->id_est = $id_est;
		$this->id_usu = $id_usu;
		$this->descricao = $descricao;
	}

	public function getIdAva() {
		return $this->id_ava;
	}

	public function setIdAva($id_ava) {
		$this->id_ava = $id_ava;
	}

	public function getIdEst() {
		return $this->id_est;
	}

	public function setIdEst($id_est) {
		$this->id_est = $id_est;
	}

	public function getIdUsu() {
		return $this->id_usu;
	}

	public function setIdUsu($id_usu) {
		$this->id_usu = $id_usu;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
}
<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:44 PM
 */

class Servico {

	private $id_ser;
	private $nome;

	public function __construct($id_ser, $nome) {
		$this->id_ser = $id_ser;
		$this->nome = $nome;
	}

	public function getIdSer() {
		return $this->id_ser;
	}

	public function setIdSer($id_ser) {
		$this->id_ser = $id_ser;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}
}
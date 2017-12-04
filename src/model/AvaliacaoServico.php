<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:43 PM
 */

class AvaliacaoServico {

	private $id_ava;
	private $id_ser;
	private $pontuacao;

	public function __construct($id_ava, $id_ser, $pontuacao) {
		$this->id_ava = $id_ava;
		$this->id_ser = $id_ser;
		$this->pontuacao = $pontuacao;
	}

	public function getIdAva() {
		return $this->id_ava;
	}

	public function setIdAva($id_ava) {
		$this->id_ava = $id_ava;
	}

	public function getIdSer() {
		return $this->id_ser;
	}

	public function setIdSer($id_ser) {
		$this->id_ser = $id_ser;
	}

	public function getPontuacao() {
		return $this->pontuacao;
	}

	public function setPontuacao($pontuacao) {
		$this->pontuacao = $pontuacao;
	}
}
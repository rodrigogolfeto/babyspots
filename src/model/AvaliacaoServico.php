<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:43 PM
 */

class AvaliacaoServico {

	private $avs_ava_id;
	private $avs_ser_id;
	private $avs_pontuacao;
	private $avs_cadastro;

	public function __construct($avs_ava_id, $avs_ser_id, $avs_pontuacao, $avs_cadastro) {
		$this->avs_ava_id = $avs_ava_id;
		$this->avs_ser_id = $avs_ser_id;
		$this->avs_pontuacao = $avs_pontuacao;
		$this->avs_cadastro = $avs_cadastro;
	}

	public function getAvsAvaId() {
		return $this->avs_ava_id;
	}

	public function setAvsAvaId($avs_ava_id) {
		$this->avs_ava_id = $avs_ava_id;
	}

	public function getAvsSerId() {
		return $this->avs_ser_id;
	}

	public function setAvsSerId($avs_ser_id) {
		$this->avs_ser_id = $avs_ser_id;
	}

	public function getAvsPontuacao() {
		return $this->avs_pontuacao;
	}

	public function setAvsPontuacao($avs_pontuacao) {
		$this->avs_pontuacao = $avs_pontuacao;
	}

	public function getAvsCadastro() {
		return $this->avs_cadastro;
	}

	public function setAvsCadastro($avs_cadastro) {
		$this->avs_cadastro = $avs_cadastro;
	}
}
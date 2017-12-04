<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:40 PM
 */

class EstabelecimentoServico {

	private $id_est;
	private $id_ser;

	public function __construct($id_est, $id_ser) {
		$this->id_est = $id_est;
		$this->id_ser = $id_ser;
	}

	public function getIdEst() {
		return $this->id_est;
	}

	public function setIdEst($id_est) {
		$this->id_est = $id_est;
	}

	public function getIdSer() {
		return $this->id_ser;
	}

	public function setIdSer($id_ser) {
		$this->id_ser = $id_ser;
	}
}
<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:40 PM
 */

class EstabelecimentoServico {

	private $ess_est_id;
	private $ess_ser_id;

	public function __construct($ess_est_id, $ess_ser_id) {
		$this->ess_est_id = $ess_est_id;
		$this->ess_ser_id = $ess_ser_id;
	}

	public function getEssEstId() {
		return $this->ess_est_id;
	}

	public function setEssEstId($ess_est_id) {
		$this->ess_est_id = $ess_est_id;
	}

	public function getEssSerId() {
		return $this->ess_ser_id;
	}

	public function setEssSerId($ess_ser_id) {
		$this->ess_ser_id = $ess_ser_id;
	}
}
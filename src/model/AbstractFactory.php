<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 6:09 AM
 */

abstract class AbstractFactory {
	protected $db;

	public function __construct() {
		try {
			$this->db = new PDO("sqlite:database/baby_spots.db");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $exception) {
			echo $exception->getMessage();
		} catch (Exception $exception) {
			echo $exception->getMessage();
		}
	}

	abstract public function add($obj);

	abstract public function edit($obj);

	abstract public function find($obj);

	protected function queryRowsToListOfObjects	(PDOStatement $result, $nameObject) {
		$list = array();
		$result = $result->fetchAll(PDO::FETCH_NUM);
		foreach ($result as $row) {
			$ref = new ReflectionClass($nameObject);
			$list[] = $ref->newInstanceArgs($row);
		}
		return $list;
	}
}
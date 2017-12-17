<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 6:09 AM
 */

require_once ("database/BD_config.php");

abstract class AbstractFactory {
	protected $db;

	public function __construct() {
		try {
			$this->db = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->exec("set names utf8");
		} catch (PDOException $exception) {
			echo $exception->getMessage();
		} catch (Exception $exception) {
			echo $exception->getMessage();
		}
	}

	abstract public function add($obj);

	abstract public function edit($obj);

	//abstract public function find($param);

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
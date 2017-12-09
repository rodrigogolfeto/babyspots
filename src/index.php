<?php
require_once 'controller/EstabelecimentoController.php';
require_once 'controller/UsuarioController.php';

/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 05/12/2017
 * Time: 8:56 PM
 */

error_reporting(E_ALL);

$estabelecimento_controller = new EstabelecimentoController();

$estabelecimento_controller->init();

?>
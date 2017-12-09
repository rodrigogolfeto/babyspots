<?php
require_once ("model/Estabelecimento.php");
require_once ("model/EstabelecimentoFactory.php");
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 4:08 AM
 */

class EstabelecimentoController {

	private $factory_estabelecimento;

	public function __construct() {
		$this->factory_estabelecimento = new EstabelecimentoFactory();

		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
	}

	public function init(){
		if(isset($_GET['func'])){
			$func = $_GET['func'];
		}
		else{
			$func = "";
		}

		switch ($func){
			case 'lista':
				$this->lista();
				break;
			case 'estabelecimento': //IRÁ COLOCAR NO BOTÃO DETALHES OU NA DIV 'ITEM-CARD'
				$this->estabelecimento();
				break;
			case 'editar':
				$this->editar();
				break;
			default:
				$this->home();
		}
	}

	public function home(){
		$result = $this->factory_estabelecimento->listar();

		require 'view/home.php';
	}

	public function lista(){
		$result = $this->factory_estabelecimento->listar();

		require 'view/lista';
	}

	public function estabelecimento(){
		require 'view/estabelecimento.php';
	}

	public function editar(){
		if (isset($_POST['sent'])) {
			$id_estabelecimento = $_GET['id_est'];
			$id_usuario = $_GET['id_usu'];
			$nome_estabelecimento = $_POST['nome_est'];
			$cep = $_POST['cep'];
			$rua = $_POST['rua'];
			$numero = $_POST['num'];
			$complemento = $_POST['comp'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cid'];
			$estado = $_POST['estado'];

			$sucesso = false;
			try {
				$estabelecimento = new Estabelecimento($id_estabelecimento, $id_usuario, $nome_estabelecimento, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado);

				$sucesso = $this->factory_estabelecimento->edit($estabelecimento);

				if ($sucesso)
					$msg = "Estabelecimento editado com sucesso";
				else
					$msg = "Falha! Tente novamente mais tarde.";

				$result = $this->factory->listar();

				require 'view/lista.php';
			} catch (Exception $e) {
				$e->getMessage();
			}
		}
	}

	public function avaliar($estabelecimento, $usuario, $descricao, $avaliacao_servico){

	}
}
<?php
require_once ("model/Usuario.php");
require_once ("model/UsuarioFactory.php");

/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 4:56 AM
 */

class UsuarioController {

	private $usuarioFactory;

	public function __construct() {
		$this->usuarioFactory = new UsuarioFactory();

		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
	}

	public function init(){
		if(isset($_GET['sys']))
			$sys = $_GET['sys'];
		else
			$sys = "";

		switch ($sys){
			case 'cadastro-usuario':
				$this->cadastro_usuario();
				break;
			case 'cadastrar':
				$this->cadastrar_usuario();
				break;
			case 'logar':
				$this->login();
				break;
		}
	}

	public function cadastro_usuario(){
		require 'view/cadastro-usuario.php';
	}

	public function login(){
		if(isset($_POST['sent'])){
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$success = false;

			try{
				$user = new Usuario($email, $senha);

				//CONSULTA O USUÁRIO NO BANCO
				$result = $this->usuarioFactory->find($user);

				if(count($result) == 0)
					$success = false;

				if(!$success) {
					$_SESSION['erroLogin'] = "Email/Senha incorreto(s).";
				}

				require 'view/home.php';
			} catch (Exception $e){
				$e->getMessage();
			}
		}
	}

	public function cadastrar_usuario(){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		//$imagem = $_POST[''];

		$usuario = new Usuario(null, $nome, $email, $senha, null);

		require 'view/cadastro-usuario.php';
	}

	public function recuperar_senha($email){

	}

	public function efetivar_login($login, $senha){

	}
}
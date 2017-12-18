<?php
require_once("model/Usuario.php");
require_once("model/UsuarioFactory.php");
require_once("model/Estabelecimento.php");
require_once("model/EstabelecimentoFactory.php");
require_once("model/Servico.php");
require_once("model/ServicoFactory.php");

/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 4:56 AM
 */

class UsuarioController {

	private $usuarioFactory;
	private $estabelecimentoFactory;
	private $servicoFactory;

	public function __construct() {
		$this->usuarioFactory = new UsuarioFactory();
		$this->estabelecimentoFactory = new EstabelecimentoFactory();
		$this->servicoFactory = new ServicoFactory();

		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
	}

	public function init(){
		if(isset($_GET['sys']))
			$sys = $_GET['sys'];
		else
			$sys = "";

		switch ($sys){
			case 'cadastrar':
				$this->cadastrar_usuario();
				break;
			case 'logar':
				$this->login($_POST['campo_email'],$_POST['campo_senha']);
				break;
			case 'deslogar':
				$this->deslogar();
				break;
			case 'dados-cadastrais':
				$this->formulario_usuario();
				break;
			case 'cadastro-usuario':
				$this->formulario_usuario();
				break;
		}
	}

	public function login($email,$senha){
		$mensagem = "";
		try{
			$user = new Usuario('', '', $email, $senha, '', '');

			//CONSULTA O USUÁRIO NO BANCO
			$result = $this->usuarioFactory->find($user);

			//VERIFICA SE ENCONTROU O USUÁRIO
			if(count($result)==1){
				//inicia sessao
				$_SESSION['usu_id'] = $result[0]->getUsuId();
				$mensagem = "sucesso";
			}else{
				//retorna erro
				$mensagem = "Dados inválidos, tente novamente.";
			}
			echo $mensagem;
		} catch (Exception $e){
			$e->getMessage();
		}
	}

	public function cadastrar_usuario(){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		//$imagem = $_POST[''];

		$usuario = new Usuario(null, $nome, $email, $senha, null);

		if(isset($_SESSION['usu_id'])){
			$user = new Usuario($_SESSION['usu_id'],'','','','','');
			$usuarioLogado = $this->usuarioFactory->find($user);
		}

		require 'view/cadastro-usuario.php';
	}

	public function recuperar_senha($email){

	}

	public function efetivar_login($login, $senha){

	}

	public function deslogar(){
		session_destroy();

		$servicos = $this->servicoFactory->listar();
		$result = $this->estabelecimentoFactory->listarTopEstabelecimentos();

		?><script>window.open('?func=home', '_self');</script><?
	}

	public function formulario_usuario(){
		if(isset($_SESSION['usu_id'])){
			$user = new Usuario($_SESSION['usu_id'],'','','','','');
			$usuarioLogado = $this->usuarioFactory->find($user);
		}
		require 'view/cadastro-usuario.php';
	}
}
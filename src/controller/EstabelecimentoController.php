<?php
require_once ("model/Estabelecimento.php");
require_once ("model/EstabelecimentoFactory.php");
require_once ("model/ServicoFactory.php");
require_once ("model/Usuario.php");
require_once ("model/UsuarioFactory.php");

/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 17/11/2017
 * Time: 4:08 AM
 */

class EstabelecimentoController {

	private $factory_estabelecimento;
	private $factory_servico;
	private $factory_usuario;

	public function __construct() {
		$this->factory_estabelecimento = new EstabelecimentoFactory();
        $this->factory_servico = new ServicoFactory();
        $this->factory_usuario = new UsuarioFactory();
		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
	}

	public function init(){
		if(isset($_GET['func'])){
			$func = $_GET['func'];
		}
		else{
            if(isset($_POST['func'])){ // para os formularios
                $func = $_POST['func'];
            } else {
                $func = "";
            }
		}

		switch ($func){
			case 'lista':
				$this->lista();
				break;
			case 'editar':
				$this->editar();
				break;
			case 'pagina-estabelecimento':
				$this->estabelecimento();
				break;
			case 'novo-estabelecimento':
				$this->novoEstabelecimento();
				break;
			default:
				$this->home();
		}
	}

	public function home(){
        $servicos = $this->factory_servico->listar();
		$result = $this->factory_estabelecimento->listarTopEstabelecimentos();

		if(isset($_SESSION['usu_id'])){
			$user = new Usuario($_SESSION['usu_id'],'','','','','');
			$usuarioLogado = $this->factory_usuario->find($user);
		}

		require 'view/home.php';
	}

	public function lista(){
		$servicosAll = $this->factory_servico->listar();

        if(isset($_GET['busca']) && isset($_GET['servico']) && !empty($_GET['busca']) && !empty($_GET['servico'])){
			$conteudo = $_GET['busca'];
			$servico = $_GET['servico'];
			$result = $this->factory_estabelecimento->buscar_servico_palavra($servico,$conteudo);
        }else if(isset($_GET['servico'])&& !empty($_GET['servico'])){
            $conteudo = $_GET['servico'];
			$result = $this->factory_estabelecimento->buscar_por_servicos($conteudo);
		}else if(isset($_GET['busca']) && !empty($_GET['busca'])){
			$conteudo = $_GET['busca'];
			$result = $this->factory_estabelecimento->buscar($conteudo);
        }else{
            $conteudo = '';
        }

		if(isset($_SESSION['usu_id'])){
			$user = new Usuario($_SESSION['usu_id'],'','','','','');
			$usuarioLogado = $this->factory_usuario->find($user);
		}

        require 'view/lista.php';

    }

	public function estabelecimento(){
		$id = $_GET['id_est'];

		//$servicos = $this->factory_servico->listar();
		$item = $this->factory_estabelecimento->find($id);

		if(isset($_SESSION['usu_id'])){
			$user = new Usuario($_SESSION['usu_id'],'','','','','');
			$usuarioLogado = $this->factory_usuario->find($user);
		}

		require 'view/pagina-estabelecimento.php';
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

	public function novoEstabelecimento(){
		if(isset($_SESSION['usu_id'])){
			$user = new Usuario($_SESSION['usu_id'],'','','','','');
			$usuarioLogado = $this->factory_usuario->find($user);
		}

		require 'view/formulario-estabelecimento.php';
	}
}
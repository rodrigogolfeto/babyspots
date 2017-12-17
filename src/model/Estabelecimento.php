<?php
/**
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 11/3/2017
 * Time: 5:37 AM
 */

class Estabelecimento {
	private $est_id;
	private $est_usu_id;
	private $est_nome;
	private $est_cep;
	private $est_rua;
	private $est_numero;
	private $est_complemento;
	private $est_bairro;
	private $est_cidade;
	private $est_estado;
	private $est_cadastro;

	//OBJETOS E ATRIBUTOS ADICIONAIS
	private $usuario;
    private $servicos;
    private $media;
    private $quantidade_avaliacao;
    private $imagens;

    public function __construct($media,$quantidade,$est_id,$est_nome,$est_cep,$est_rua,$est_numero,$est_complemento,$est_bairro,$est_cidade,$est_estado) {
        $this->media = $media;
		$this->quantidade_avaliacao = $quantidade;
        $this->est_id = $est_id;
        $this->est_nome = $est_nome;
        $this->est_cep = $est_cep;
        $this->est_rua = $est_rua;
        $this->est_numero = $est_numero;
        $this->est_complemento = $est_complemento;
        $this->est_bairro = $est_bairro;
        $this->est_cidade = $est_cidade;
        $this->est_estado = $est_estado;

        $this->servicos = array();
        $this->imagens = array();
    }

	public function getEstId() {
		return $this->est_id;
	}

	public function setEstId($est_id) {
		$this->est_id = $est_id;
	}

	public function getEstUsuId() {
		return $this->est_usu_id;
	}

	public function setEstUsuId($est_usu_id) {
		$this->est_usu_id = $est_usu_id;
	}

	public function getEstNome() {
		return $this->est_nome;
	}

	public function setEstNome($est_nome) {
		$this->est_nome = $est_nome;
	}

	public function getEstCep() {
		return $this->est_cep;
	}

	public function setEstCep($est_cep) {
		$this->est_cep = $est_cep;
	}

	public function getEstRua() {
		return $this->est_rua;
	}

	public function setEstRua($est_rua) {
		$this->est_rua = $est_rua;
	}

	public function getEstNumero() {
		return $this->est_numero;
	}

	public function setEstNumero($est_numero) {
		$this->est_numero = $est_numero;
	}

	public function getEstComplemento() {
		return $this->est_complemento;
	}

	public function setEstComplemento($est_complemento) {
		$this->est_complemento = $est_complemento;
	}

	public function getEstBairro() {
		return $this->est_bairro;
	}

	public function setEstBairro($est_bairro) {
		$this->est_bairro = $est_bairro;
	}

	public function getEstCidade() {
		return $this->est_cidade;
	}

	public function setEstCidade($est_cidade) {
		$this->est_cidade = $est_cidade;
	}

	public function getEstEstado() {
		return $this->est_estado;
	}

	public function setEstEstado($est_estado) {
		$this->est_estado = $est_estado;
	}

	public function getEstCadastro() {
		return $this->est_cadastro;
	}

	public function setEstCadastro($est_cadastro) {
		$this->est_cadastro = $est_cadastro;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public function getServicos() {
		return $this->servicos;
	}

	public function setServicos($servicos) {
		$this->servicos = $servicos;
	}

	public function getMedia() {
		return $this->media;
	}

	public function setMedia($media) {
		$this->media = $media;
	}

	public function getQuantidadeAvaliacao() {
		return $this->quantidade_avaliacao;
	}

	public function setQuantidadeAvaliacao($quantidade_avaliacao) {
		$this->quantidade_avaliacao = $quantidade_avaliacao;
	}

    public function getImagens(){
        return $this->imagens;
    }

    public function setImagens($imagens){
        $this->imagens = $imagens;
    }

	public function adicionarServico($servico){
        array_push($this->servicos,$servico);
    }

    public function adicionarImagem($imagem){
        array_push($this->imagens,$imagem);
    }





}
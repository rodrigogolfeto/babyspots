<?php
/**
 *
 * Created by PhpStorm.
 * User: kelvin-fernandes <sokelvinfernandes>
 * Date: 03/12/2017
 * Time: 9:44 PM
 */

class Servico {

	private $ser_id;
	private $ser_nome;
	private $ser_nome_min;
    private $ser_classe;

    //OBJETOS E ATRIBUTOS ADICIONAIS
    private $nota;

	public function __construct($ser_id, $ser_nome, $ser_nome_min, $ser_classe, $nota) {
		$this->ser_id = $ser_id;
        $this->ser_nome = $ser_nome;
        $this->ser_nome_min = $ser_nome_min;
		$this->ser_classe = $ser_classe;
		$this->nota = $nota;
	}

	public function getSerId() {
		return $this->ser_id;
	}

	public function setSerId($ser_id) {
		$this->ser_id = $ser_id;
	}

	public function getSerNome() {
		return $this->ser_nome;
	}

	public function getSerNomeReduzido(){
		$nome = $this->ser_nome;
		$nome = str_replace('banheiro','banh.',$nome);
		$nome = str_replace('estacionamento própio','estacionamento',$nome);
		$nome = str_replace('comida','com.',$nome);
		$nome = str_replace('possibilidade','possib.',$nome);
		$nome = str_replace('lactointolerantes','lactoint.',$nome);
		return $this->cutHTML($nome,20,'...');//$this->ser_nome;
	}

	public function setSerNome($ser_nome) {
		$this->ser_nome = $ser_nome;
	}

	public function getSerNomeMin(){
		return $this->ser_nome_min;
	}

	public function setSerNomeMin($ser_nome_min){
		$this->ser_nome_min = $ser_nome_min;
	}

	public function getSerClasse() {
		return $this->ser_classe;
	}

	public function setSerClasse($ser_classe) {
		$this->ser_classe = $ser_classe;
	}

	public function getNota() {
		return $this->nota;
	}

	public function setNota($nota) {
		$this->nota = $nota;
	}

	public function cutHTML($text,$length=100,$ending='...',$cutWords=false,$considerHtml=false) {
		if($considerHtml){
			if(strlen(preg_replace('/<.*?>/', '', $text)) <= $length) { // se o texto for mais curto que $length, retornar o texto na totalidade
				return $text;
			}
			preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);// separa todas as tags html em linhas pesquisáveis
			$total_length = strlen($ending);
			$open_tags = array();
			$truncate = '';
			foreach ($lines as $line_matchings) {
				if (!empty($line_matchings[1])) { // se existir uma tag html nesta linha, considerá-la e adicioná-la ao output (sem contar com ela)
					if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) { // se for um "elemento vazio" com ou sem barra de auto-fecho xhtml (ex. <br />)
						// não fazer nada // se a tag for de fecho (ex. </b>)
					}else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
						$pos = array_search($tag_matchings[1], $open_tags);// apagar a tag do array $open_tags
						if($pos !== false) { unset($open_tags[$pos]); }
					}else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {// se a tag é uma tag inicial (ex. <b>)
						array_unshift($open_tags, strtolower($tag_matchings[1]));// adicionar tag ao início do array $open_tags
					}
					$truncate .= $line_matchings[1];// adicionar tag html ao texto $truncate
				}
				$content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));// calcular a largura da parte do texto da linha; considerar entidades como um caracter
				if ($total_length+$content_length> $length) {
					$left = $length - $total_length;// o número dos caracteres que faltam
					$entities_length = 0;
					if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {// pesquisar por entidades html
						foreach ($entities[0] as $entity) {// calcular a largura real de todas as entidades no alcance "legal"
							if ($entity[1]+1-$entities_length <= $left) {
								$left--;
								$entities_length += strlen($entity[0]);
							} else {
								break;// não existem mais caracteres
							}
						}
					}
					$truncate .= substr($line_matchings[2], 0, $left+$entities_length);
					break;// chegamos à largura máxima, por isso saímos do loop
				} else {
					$truncate .= $line_matchings[2];
					$total_length += $content_length;
				}
				if($total_length>= $length) {// se chegarmos à largura máxima, saímos do loop
					break;
				}
			}
		} else {
			if (strlen($text) <= $length) {
				return $text;
			} else {
				$truncate = substr($text, 0, $length - strlen($ending));
			}
		}
		if (!$cutWords) {// se as palavras não puderem ser cortadas a meio...
			$spacepos = strrpos($truncate, ' ');// ...procurar a última ocorrência de um espaço...
			if (isset($spacepos)) {
				$truncate = substr($truncate, 0, $spacepos);// ...e cortar o texto nesta posição
			}
		}
		$truncate .= $ending;// adicionar $ending no final do texto
		if($considerHtml) {
			foreach ($open_tags as $tag) {// fechar todas as tags html não fechadas
				$truncate .= '</' . $tag . '>';
			}
		}
		return $truncate;
	}
}
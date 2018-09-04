<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }
    public function getViews() {
        return $this->views;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    public function play() {
        if(!$this->getReproduzindo()){
            $this->setReproduzindo(true);
        }
    }
    public function pause() {
        if($this->getReproduzindo()){
            $this->setReproduzindo(false);
        }
    }
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }
}

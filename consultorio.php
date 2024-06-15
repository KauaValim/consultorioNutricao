<?php
    class consultorio {
        private $nome;
        private $anoNascimento;
        private $peso;
        private $altura;

        public function __construct($nome = null, $anoNascimento = null, $peso = null, $altura = null) {
            $this->nome = $nome;
            $this->anoNascimento = $anoNascimento;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setAnoNascimento($anoNascimento) {
            $this->anoNascimento = $anoNascimento;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getAnoNascimento() {
            return $this->anoNascimento;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function __toString() {
            return "Nome: $this->nome<br>Ano Nascimento: $this->anoNascimento<br>Peso: ".number_format($this->peso,2,",",".")."<br>
            Altura: ".number_format($this->altura,2,",",".").".<br>";
        }

        public function calcularIMC($peso, $altura) {
            $imc = $peso*pow($altura,2);
            return ($imc < 18.5) ? "Abaixo do peso" : (($imc < 24.9) ? "Peso normal" : (($imc < 29.9) ? "Sobre peso" : "Obesidade"));
        }

        public function calcularIdade($anoNascimento) {
            return date("Y")-$anoNascimento;
        }

    }
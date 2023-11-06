<?php
    class Retangulo {

        # atributos
        private $ladoMaior;
        private $ladoMenor;

        # métodos
        public function setLadoMaior($maior) {
            $this->ladoMaior = $maior;
        }

        public function setLadoMenor($menor) {
            $this->ladoMenor = $menor;
        }

        public function calculaArea() {
            $area = $this->ladoMaior * $this->ladoMenor;
            return $area;
        }
    }
?>
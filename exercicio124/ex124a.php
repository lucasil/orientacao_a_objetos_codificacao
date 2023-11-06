<?php
    class Adulto {
        # atributo
        private $peso;

        # métodos
        # usa-se o $this-> para referenciar um atributo dentro da classe
        public function engordar($quilos) {
            $this->peso += $quilos; # $this->peso = $this->peso + $quilos
        }
        
        public function emagrecer($quilos) {
            $this->peso -= $quilos; # $this->peso = $this->peso - $quilos
        }

    }
?>
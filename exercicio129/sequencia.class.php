<?php 
    class Sequencia {
        # atributos
        private $inicio;
        private $fim;

        # métodos
        public function setInicio($inicio) {
            $this->inicio = $inicio;
        }

        public function setFim ($fim) {
            $this->fim = $fim;
        }

        public function exibirTodosNumeros() {
            for ($i = $this->inicio; $i <= $this->fim; $i++) {
                echo $i . '<br>';
            }
        }

        public function exibirPares() {
            for ($i = $this->inicio; $i <= $this->fim; $i++) {
                if (!($i % 2)) {
                    echo $i . '<br>';
                }
            }
        }

        public function exibirImpares() {
            for ($i = $this->inicio; $i <= $this->fim; $i++) {
                if ($i % 2) {
                    echo $i . '<br>';
                }
            }
        }
    }
?>
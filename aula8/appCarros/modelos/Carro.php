     <?php 
     
     class Carro{

        private $modelo;
        private $ano;
        private $fabricante;
        

        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of ano
         */
        public function getAno()
        {
                return $this->ano;
        }

        /**
         * Set the value of ano
         */
        public function setAno($ano): self
        {
                $this->ano = $ano;

                return $this;
        }

        /**
         * Get the value of fabricante
         */
        public function getFabricante()
        {
                return $this->fabricante;
        }

        /**
         * Set the value of fabricante
         */
        public function setFabricante($fabricante): self
        {
                $this->fabricante = $fabricante;

                return $this;
        }
     }
     
     ?>
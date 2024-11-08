<?php 
    class Aluno{
        private $nome;
        private int $nota1;
        private int $nota2;
        

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of nota1
         */
        public function getNota1(): int
        {
                return $this->nota1;
        }

        /**
         * Set the value of nota1
         */
        public function setNota1(int $nota1): self
        {
                $this->nota1 = $nota1;

                return $this;
        }

        /**
         * Get the value of nota2
         */
        public function getNota2(): int
        {
                return $this->nota2;
        }

        /**
         * Set the value of nota2
         */
        public function setNota2(int $nota2): self
        {
                $this->nota2 = $nota2;

                return $this;
        }

        public function getCaucula(){
            print("ALUNO: " . $this->nome . "\nNOTA 1○ BIMESTRE:" . $this->nota1 . "\nNOTA 2○ BIMESTRE:" . $this->nota2 . "\nMÉDIA:". ($this->nota1 + $this->nota2)/2) . "\n\n\n";
        }
    }
    for ($i=1; $i < 4; $i++) { 
        $Aluno1 = new Aluno();
        $Aluno1->setNome(readline("Nome do aluno: "));
        $Aluno1->setNota1(readline("Nota 1○ semestre: "));
        $Aluno1->setNota2(readline("Nota 2○ semstre: "));
        print ($Aluno1->getCaucula());
    }
    
    
?>
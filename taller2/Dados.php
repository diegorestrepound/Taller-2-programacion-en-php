<?php

    class Dados{
        private $dado1 = 6;
        private $dado2 = 6;
        private $dado3 = 2;

        public function getDado1(){
            return $this->dado1;
        }

        public function getDado2(){
            return $this->dado2;
        }

        public function getDado3(){
            return $this->dado3;
        }


        public function mostrar(){
            print $this->getDado1() . " ";
            print $this->getDado2() . " ";
            print $this->getDado3() . "<br>";
        }

        public function tirar(){
            if($this->getDado1() == 6 && $this->getDado2() == 6 && $this->getDado3() == 6){
                print "Ganas 20$";
            }elseif($this->getDado1() == $this->getDado2() && $this->getDado1() == $this->getDado3()){
                print "Ganas 10$";
            }elseif($this->getDado1() == $this->getDado2() || $this->getDado1() == $this->getDado3() || $this->getDado2() == $this->getDado3()){
                print "Ganas 5$";
            }
        }

    }

?>
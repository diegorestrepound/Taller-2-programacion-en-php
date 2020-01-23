<?php
    class Cine{
        private $edadcomprador;

        public function __construct(){
            $this->edadcomprador=0;
        }

        public function getEdadcomprador(){
            return $this->edadcomprador;
        }

        public function setEdadcomprador($edad){
            $this->edadcomprador = $edad;
        }


        public function precio(){
            if($this->getEdadcomprador() > 0 && $this->getEdadcomprador() < 5){
                print"Tu entrada es gratis";
            }elseif($this->getEdadcomprador() < 12){
                print "Pagas la mitad de la tarifa";
            }elseif($this->getEdadcomprador() < 54){
                print"Pagas la tarifa completa";
            }elseif($this->getEdadcomprador() > 55){
                print"Tu entrada es gratis";
            }else{
                print "Eror";
            }
        }
    }
?>
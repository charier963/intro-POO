<?php


    class Bicycle
    {
        private string  $color ;
        
        public string  $currentSpeed;

        public int $nbSeats  ;

        public int $nbWheels ;

        public function __construct(string $color,int $nbSeats,int $nbWheels)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->nbWheels = $nbWheels;
        }
        //methode private public
        public function getColor(): string
        {
            return $this->color;
        }
        public function setColor(string $color): void
        {
            $this->color = $color;
        }
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }
        public function setCurrentSpeed(int $currentSpeed): void
        {
            if ($currentSpeed >= 0) {
                $this->currentSpeed = $currentSpeed;
            }
        }
        public function forward(): string
        {
            $this->currentSpeed = 15;

            return "Go !";
        }

        public function brake(): string
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }
            $sentence .= "I'm stopped !";
            return $sentence;
        }      
    }
     
    ?>
<?php
class Car
{
    private int $numberWheels;
    private int $currentSpeed;
    private string $color;
    private int $numberSeats;
    private string $energy;
    private int $ennergyLevel;

    public function __construct(string $color,int $nomberSeats,int $ennergyLevel)
    {
        $this->color = $color;
        $this->nomberSeats = $nomberSeats;
        $this->ennergyLevel = $ennergyLevel;
    }
    public function getNumberWheels():int
    {
        return $this->numberWheels;
    }
    public function setNumberWheels(int $numberWheels): void
    {
        $this->numberWheels = $numberWheels;
    }
    public function getNumberSeats(): int
    {
        return $this->numberSeats;
    }
    public function setNumberSeats(int $numberSeats): void
    {
        $this->numberSeats = $numberSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
    public function getEnergyLevel(): string
    {
        return $this->ennergyLevel;
    }
    public function setEnergyLevel(string $ennergyLevel): void
    {
        $this->ennergyLevel = $ennergyLevel;
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
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
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


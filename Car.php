<?php

  // Car.php

  class Car
  {
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $currentSpeed)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    $this->currentSpeed = $currentSpeed;
    }

    public function forward(): string
    {
        $this->currentSpeed = 50;

        return "<br>Go Go Go !";
    }

    public function brake(): string
    {
      $sentence = "";
      while ($this->currentSpeed > 0) {
          $this->currentSpeed--;
          $sentence .= "Brake !";
      }
      $sentence .= "<br><br>I'm stopped .";
      return $sentence;
    }
    
    public function start(): string
    {
        if ($this->currentSpeed === 0) {
          return "Engine start.";
        } else {
          return "Engine already started.";
        }
    }

    public function getNbWheels(): int
    {
      return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
      return $this->currentSpeed;
    }

    public function getColor(): string
    {
      return $this->color;
    }

    public function getNbSeats(): int
    {
      return $this->nbSeats;
    }

    public function getEnergy(): string
    {
      return $this->energy;
    }

    public function getEnergyLevel(): int
    {
      return $this->energyLevel;
    }

  }

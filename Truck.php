<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public const INITIAL_LOADING = 0;

    private string $energy;

    private int $storageCapacity;

    private int $loading = self::INITIAL_LOADING;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES, true)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function filling($loading)
    {
        if ($loading < $this->storageCapacity ) {
            $this->setLoading($loading);
            return "in filling";
        } else {
            $this->setLoading($this->storageCapacity);
            return "full";
        }
        if ( $this->loading === $this->storageCapacity) echo "full";
        else echo "in filling";
    }

    /**
     * Get the value of storageCapacity
     */ 
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity
     */ 
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * Get the value of loading
     */ 
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * Set the value of loading
     */ 
    public function setLoading($loading)
    {
        $this->loading = $loading;
    }
}
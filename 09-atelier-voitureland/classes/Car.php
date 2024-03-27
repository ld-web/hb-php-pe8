<?php

class Car
{
    private string $name;
    private string $engine;
    private int    $year;
    private int    $km;

    public function __construct(
        string $name,
        string $engine,
        int    $year,
        int    $km
    ) {
        $this->name = $name;
        $this->engine = $engine;
        $this->year = $year;
        $this->km = $km;
    }

    public function getDescription(): string
    {
        return $this->engine . ' - ' . $this->year . ' - ' . $this->km . 'km';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}

<?php

class CarsCollection
{
    private array $cars;

    public function __construct(array $cars)
    {
        $this->cars = $cars;
    }

    public function getUniqueYears(): array
    {
        $years = [];

        foreach ($this->cars as $car) {
            $years[] = $car->getYear();
        }

        $years = array_unique($years);
        sort($years);

        return $years;
    }

    public function getByYear(int $year): array
    {
        return array_filter($this->cars, fn (Car $car) => $car->getYear() === $year);
    }

    public function getByName(string $name): array
    {
        return array_filter(
            $this->cars,
            fn (Car $car) => str_contains(
                strtolower($car->getName()),
                strtolower($name)
            )
        );
    }
}

<?php

class Employee
{
    public const EMPLOYEE_TYPE = 1;
    public string $name;
    protected float $salary;
    protected int $experience;
    private int $id;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->id = rand(1, 25);
    }

    public function getExperience(): int
    {
        return $this->experience;
    }
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function calculateSalary(): float
    {
        return $this->salary;
    }

    public function __toString(): string
    {
        return "Darbuotojas {" . $this->id . "}: {" . $this->name . "} - {" . $this->salary . "} EUR";
    }

    public function __clone()
    {
        $this->EMPLOYEE_TYPE = 0;
    }

    public static function getTypeDescription(): string
    {
        return "Darbuotojo tipas {" . self::EMPLOYEE_TYPE . "}";
    }
}
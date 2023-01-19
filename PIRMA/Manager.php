<?php

class Manager extends Employee
{
    public const EMPLOYEE_TYPE = 2;
    protected int $overtimeHours;

    public function __construct(string $name, float $salary, int $overtimeHours)
    {
        $this->overtimeHours = $overtimeHours;
        parent::__construct($name, $salary);
    }

    public function calculateSalary(): float
    {
        return $this->salary + ($this->salary / 40 * $this->overtimeHours) * 2;
    }
}
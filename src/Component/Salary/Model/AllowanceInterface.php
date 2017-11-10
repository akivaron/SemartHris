<?php

namespace KejawenLab\Application\SemartHris\Component\Salary\Model;

use KejawenLab\Application\SemartHris\Component\Employee\Model\EmployeeInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface AllowanceInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return EmployeeInterface|null
     */
    public function getEmployee(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface|null $employee
     */
    public function setEmployee(EmployeeInterface $employee = null): void;

    /**
     * @return ComponentInterface|null
     */
    public function getComponent(): ? ComponentInterface;

    /**
     * @param ComponentInterface|null $component
     */
    public function setComponent(ComponentInterface $component = null): void;

    /**
     * @return int|null
     */
    public function getYear(): int;

    /**
     * @param int|null $year
     */
    public function setYear(int $year): void;

    /**
     * @return int|null
     */
    public function getMonth(): int;

    /**
     * @param int|null $month
     */
    public function setMonth(int $month): void;

    /**
     * @return null|string
     */
    public function getBenefitValue(): ? string;

    /**
     * @param string $value
     */
    public function setBenefitValue(string $value): void;
}

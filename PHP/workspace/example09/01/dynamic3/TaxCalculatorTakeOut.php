<?php

namespace dynamic3;

class TaxCalculatorTakeOut extends AbstractTaxCalculator
{
    private const TAX = 0.08;

    public function calculate(int $price): float
    {
        return $this->addTax($price, self::TAX);
    }
}
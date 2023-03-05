<?php

namespace BSR\Contracts;

use BSR\Enums\DiscountType;

interface DiscountContract
{
    /**
     * @return string
     */
    public function getName(): string;
    
    /**
     * @return \BSR\Enums\DiscountType
     */
    public function getType(): DiscountType;
    
    /**
     * The number of the discount based on type.
     *
     * example:
     *      if type is AMOUNT, return 20$ discount
     *      if type is Percent, return 20  and means 20%.
     *
     * @return mixed
     */
    public function getValue(): float;
    
    /**
     * Calculate discount based on basic price given and this discount type/value.
     *
     * @param float $price
     *
     * @return mixed
     */
    public function getCalculatedValue(float $price): float;
}

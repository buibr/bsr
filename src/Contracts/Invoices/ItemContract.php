<?php


namespace BSR\Contracts\Invoices;


use BSR\Contracts\DiscountContract;

interface ItemContract
{
    /**
     * @return string
     */
    public function getDescription(): string;
    
    /**
     * @return null|float
     */
    public function getQuantity(): ?float;
    
    /**
     * Real unit price of item
     *
     * @return float
     */
    public function getUnitPrice(): float;
    
    /**
     * Discount object of this item.
     *
     * @return DiscountContract
     */
    public function getDiscount(): DiscountContract;
    
    
    /**
     * Return the price after calculation
     *
     * @return float
     */
    public function getUnitVat(): float;
    
    /**
     * If the item is refundable
     *
     * @return bool
     */
    public function getRefundable(): bool;
    
}

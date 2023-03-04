<?php


namespace BSR\Contracts\Invoices;


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
     * Should return discount price after calculation.
     *
     * Example:
     *
     * unit_price = 100.00 $;
     * real_discount = 20%
     *
     * should return: 20 $
     *
     * @return float
     */
    public function getDiscount(): float;
    
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

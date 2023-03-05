<?php


namespace BSR\Contracts;


interface InvoiceItemContract
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
    public function isRefundable(): bool;
    
}

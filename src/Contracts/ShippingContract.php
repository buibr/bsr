<?php


namespace BSR\Contracts;


interface ShippingContract
{
    /**
     * @return string
     */
    public function getName(): string;
    
    /**
     * @return \BSR\Contracts\AddressContract
     */
    public function getAddress(): AddressContract;
    
    /**
     * @return null|string
     */
    public function getPurchaseOrderNumber(): ?string;
}

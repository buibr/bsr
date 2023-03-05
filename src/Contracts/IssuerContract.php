<?php

namespace BSR\Contracts;

interface IssuerContract
{
    /**
     * @return string
     */
    public function getName(): string;
    
    /**
     * Email or Phone by desire
     *
     * @return null|string
     */
    public function getEmail(): ?string;
    
    /**
     * @return null|string
     */
    public function getPhoneNumber(): ?string;
    
    /**
     * @return \BSR\Contracts\AddressContract
     */
    public function getAddress(): AddressContract;
    
    /**
     * This is the logo on the invoice.
     *
     * @return null|string
     */
    public function getImage(): ?string;
}

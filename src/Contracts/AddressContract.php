<?php

namespace BSR\Contracts;

interface AddressContract
{
    /**
     * Email or Phone by desire
     *
     * @return string
     */
    public function line1(): string;
    
    /**
     * Email or Phone by desire
     *
     * @return null|string
     */
    public function line2(): ?string;
    
    /**
     * @return null|string
     */
    public function line3(): ?string;
    
    /**
     * @return null|string
     */
    public function city(): ?string;
    
    /**
     * @return null|string
     */
    public function zip(): ?string;
    
    /**
     * @return null|string
     */
    public function state(): ?string;
    
    /**
     * @return string
     */
    public function country(): string;
}

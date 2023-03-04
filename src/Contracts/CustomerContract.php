<?php

namespace BSR\Contracts;

interface CustomerContract
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
    public function getEmail() :? string;
    
    /**
     * @return null|string
     */
    public function getPhoneNumber() :? string;
    
    /**
     * @return \BSR\Contracts\AddressContract
     */
    public function getAddress() : AddressContract;
}

<?php

namespace BSR\Contracts;

interface BankAccountContract
{
    /**
     * @return string
     */
    public function getName(): string;
    
    /**
     * @return string
     */
    public function getAccountNumber(): string;
    
    /**
     * @return string
     */
    public function getIbanCode(): string;
    
    /**
     * @return string
     */
    public function getSwiftCode(): string;
}

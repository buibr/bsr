<?php

namespace BSR\Contracts;

/**
 * When invoicing to customer for some service/goods, we have to put ours bank information on the invoice.
 */
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

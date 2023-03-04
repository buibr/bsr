<?php

namespace BSR\Contracts;

interface PayableContract
{
    /**
     * @return mixed
     */
    public function getName(): string;
    
    /**
     * @return null|string
     */
    public function getAddressLine1(): ?string;
    
    /**
     * @return null|string
     */
    public function getAddressLine2(): ?string;
    
    /**
     * @return null|string
     */
    public function getAddressLine3(): ?string;
    
    /**
     * It should return bank account array
     * Almost all companies have multiple bank account you can pay to.
     * This is the reason this method should return an array of BankAccountContract implementation classes.
     *
     * @return \BSR\Contracts\BankAccountContract[]|array
     */
    public function getBankAccounts(): ?array;
    
}

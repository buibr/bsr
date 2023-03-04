<?php


namespace BSR\Contracts\Invoices;

use BSR\Contracts\IssuerContract;
use BSR\Contracts\PayableContract;
use BSR\Contracts\ShippingContract;
use BSR\Contracts\CustomerContract;
use BSR\Contracts\Invoices\ItemContract;

interface InvoiceContract
{
    /**
     * Unique invoice id.
     *
     * @return mixed
     */
    public function getId(): string;
    
    /**
     * @return ItemContract[]|\Iterator
     */
    public function getItems() : \Iterator;
    
    /**
     * @return IssuerContract
     */
    public function getIssuer(): IssuerContract;
    
    /**
     * @return \DateTimeInterface
     */
    public function getIssueDate(): \DateTimeInterface;
    
    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryDate(): \DateTimeInterface;
    
    /**
     * @return \DateTimeInterface
     */
    public function getDueDate(): \DateTimeInterface;
    
    /**
     * @return CustomerContract
     */
    public function getBilledTo(): CustomerContract;
    
    /**
     * @return PayableContract
     */
    public function getPayableTo(): PayableContract;
    
    /**
     * @return ShippingContract
     */
    public function getShipTo(): ShippingContract;
    
}

<?php


namespace BSR\Contracts;

interface InvoiceContract
{
    /**
     * Unique invoice id.
     *
     * @return mixed
     */
    public function getId(): string;
    
    /**
     * @return InvoiceItemContract[]|\Iterator
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

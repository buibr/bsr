<?php

namespace BSR\Contracts;

use BSR\Enums\SubscriptionType;

interface SubscriptionContract
{
    public function getId();
    
    public function getType(): SubscriptionType;
}

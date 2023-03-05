<?php

namespace BSR\Enums;

enum SubscriptionType
{
    case PrePaid;
    
    case PostPaid;
    
    case PrePaidMonthly;
    
    case PostPaidMonthly;
    
    case PayAsYouGo;
    
    case Unlimited;
    
    case Freemium;
    
}

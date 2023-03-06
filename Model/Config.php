<?php

namespace Worldstes\TestRevPlugin\Model;

use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;

class Config
{
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getMyField($storeId = null)
    {
        return $this->scopeConfig->getValue('my_options/my_field', ScopeInterface::SCOPE_STORE, $storeId);
    }
}
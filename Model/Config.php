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
        return $this->scopeConfig->getValue('settings/uid', ScopeInterface::SCOPE_STORE, $storeId);
    }
}
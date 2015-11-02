<?php

namespace Magium\Actions\Checkout\Steps;

use Magium\WebDriver\WebDriver;
use Magium\Themes\ThemeConfiguration;
class ShippingAddress implements StepInterface
{
    
    protected $webdriver;
    protected $theme;
    
    public function __construct(
        WebDriver $webdriver,
        ThemeConfiguration $theme
    ) {
        $this->webdriver    = $webdriver;
        $this->theme        = $theme;
    }
    
    public function execute()
    {
        
    }
}
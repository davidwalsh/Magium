<?php

namespace Magium\Magento\Themes;

class AdminThemeConfiguration extends ThemeConfiguration
{
    
    protected $loginUsernameField           = '//input[@type="text" and @id="username"]';
    protected $loginPasswordField           = '//input[@type="password" and @id="login"]';
    protected $loginSubmitButton            = '//input[@type="submit" and @value="Login"]';
    
    protected $navigationBaseXPathSelector          = '//ul[@id="nav"]';
    protected $navigationChildXPathSelector1         = 'li/descendant::span[.="%s"]';
    protected $navigationChildXPathSelector         = 'li[contains(concat(" ",normalize-space(@class)," ")," level%d ")]/a[.="%s"]/..';

    protected $adminPopupMessageContainerXpath         = '//*[@id="message-popup-window"]';
    protected $adminPopupMessageCloseButtonXpath        = '//*[@id="message-popup-window"]/descendant::*[@title="close"]';

    protected $systemConfigTabsXpath                = '//ul[@id="system_config_tabs"]/descendant::a[contains(concat(" ",normalize-space(.)," ")," %s ")]';
    protected $systemConfigSectionToggleXpath             = '//form[@id="config_edit_form"]/descendant::div[contains(concat(" ",normalize-space(@class)," ")," section-config ")]/descendant::a[.="%s"]';
    protected $systemConfigSectionDisplayCheckXpath            = '//legend[.="%s"]';
    protected $systemConfigToggleEnableXpath            = '//legend[.="%s"]/../descendant::td[concat(" ",normalize-space(.)," ") = " Enabled "]/../td/descendant::select/option[@value="%d"]';

    protected $systemConfigurationSaveButtonXpath       = '//div[@class="main-col-inner"]/div[@class="content-header"]/descendant::button[@title="Save Config"]';

    protected $systemConfigSaveSuccessfulXpath          = '//li[@class="success-msg"]/descendant::span[.="The configuration has been saved."]';

    /**
     * @return string
     */
    public function getSystemConfigSaveSuccessfulXpath()
    {
        return $this->systemConfigSaveSuccessfulXpath;
    }

    /**
     * @return string
     */
    public function getSystemConfigurationSaveButtonXpath()
    {
        return $this->systemConfigurationSaveButtonXpath;
    }

    /**
     * @return string
     */
    public function getSystemConfigSectionToggleXpath()
    {
        return $this->systemConfigSectionToggleXpath;
    }

    /**
     * @return string
     */
    public function getSystemConfigSectionDisplayCheckXpath()
    {
        return $this->systemConfigSectionDisplayCheckXpath;
    }

    /**
     * @return string
     */
    public function getSystemConfigToggleEnableXpath()
    {
        return $this->systemConfigToggleEnableXpath;
    }

    /**
     * @return string
     */
    public function getSystemConfigTabsXpath()
    {
        return $this->systemConfigTabsXpath;
    }

    /**
     * @return string
     */
    public function getSystemConfigSectionXpath()
    {
        return $this->systemConfigSectionXpath;
    }

    public function getAdminPopupMessageContainerXpath()
    {
        return $this->adminPopupMessageContainerXpath;
    }

    public function getAdminPopupMessageCloseButtonXpath()
    {
        return $this->adminPopupMessageCloseButtonXpath;
    }

}
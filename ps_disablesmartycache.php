<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_disablesmartycache extends Module
{
    public function __construct()
    {
        $this->name = 'ps_disablesmartycache';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'PululuK';

        parent::__construct();

        $this->displayName = $this->l('Disable smarty cache support');
        $this->description = $this->l('Disable prestashop smarty cache support');

        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        Configuration::deleteByName('PS_SMARTY_CACHING_TYPE');

        return parent::install();
    }
}

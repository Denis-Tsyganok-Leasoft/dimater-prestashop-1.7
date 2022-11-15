<?php

use Lib\banktwins\GingerBankGateway;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'dimater/ginger/vendor/autoload.php');

class dimatercreditcard extends GingerBankGateway
{
    use GingerInstallTrait;

    public function __construct()
    {
        $this->name = 'dimatercreditcard';
	    $this->method_id = 'credit-card';
        parent::__construct();
    }
}

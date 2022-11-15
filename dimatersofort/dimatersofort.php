<?php

use Lib\banktwins\GingerBankGateway;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'dimater/ginger/vendor/autoload.php');

class dimatersofort extends GingerBankGateway
{
    use GingerInstallTrait;

    public function __construct()
    {
        $this->name = 'dimatersofort';
	    $this->method_id = 'sofort';
        parent::__construct();
    }
}

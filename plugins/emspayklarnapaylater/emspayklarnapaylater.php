<?php

defined('_JEXEC') or die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

use Ginger\Lib\GingerVmPaymentPlugin;
use Ginger\Redefiners\VmPaymentPluginRedefiner;

/**
 *   ╲          ╱
 * ╭──────────────╮  COPYRIGHT (C) 2018 GINGER PAYMENTS B.V.
 * │╭──╮      ╭──╮│
 * ││//│      │//││  This software is released under the terms of the
 * │╰──╯      ╰──╯│  MIT License.
 * ╰──────────────╯
 *   ╭──────────╮    https://www.gingerpayments.com/
 *   │ () () () │
 *
 * @category    Ginger
 * @package     Ginger Virtuemart
 * @author      Ginger Payments B.V. (plugins@gingerpayments.com)
 * @version     v1.3.1
 * @copyright   COPYRIGHT (C) 2018 GINGER PAYMENTS B.V.
 * @license     The MIT License (MIT)
 * @since       v1.0.0
 **/

ini_set('display_errors', 'Off');
if (!class_exists('vmPSPlugin')) {
    require(VMPATH_PLUGINLIBS . DS . 'vmpsplugin.php');
}

JLoader::registerNamespace('Ginger', JPATH_LIBRARIES . '/emspay');
JImport('emspay.vendor.autoload');
JImport('emspay.emspayhelper');

class plgVmPaymentEmspayklarnaPayLater extends VmPaymentPluginRedefiner
{
    public $payment_method = 'klarna-pay-later';

    /**
     * check if current method is selected
     *
     * @param int $selected
     * @return boolean
     * @since v1.0.0
     */
    public function isPaymentSelected($selected)
    {
        $method = array_shift($this->methods);
        if (is_object($method)) {
            return $method->virtuemart_paymentmethod_id === $selected;
        }
        return false;
    }
}

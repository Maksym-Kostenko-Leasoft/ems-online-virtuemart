<?php

defined('_JEXEC') or die('Restricted access');

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

class plgVmPaymentEmspaybanktransfer extends VmPaymentPluginRedefiner
{
    public $payment_method = 'bank-transfer';
}


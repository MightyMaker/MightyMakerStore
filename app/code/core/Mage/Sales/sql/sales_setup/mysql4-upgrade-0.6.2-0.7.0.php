<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Sales
 * @copyright   Copyright (c) 2014 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$installer = $this;

/* @var $installer Mage_Sales_Model_Entity_Setup */

$installer->startSetup();

$installer->run("

UPDATE {$this->getTable('core_email_template')} set template_text='<style type=\"text/css\">\r\nbody,td { color:#2f2f2f; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; }\r\n</style>\r\n\r\n<div style=\"font:11px/1.35em Verdana, Arial, Helvetica, sans-serif;\">\r\n            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\" style=\"margin-top:10px; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; margin-bottom:10px;\"\">\r\n             <tr>\r\n                    <td align=\"center\" valign=\"top\">\r\n                    <!-- [ header starts here] -->\r\n                      <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"650\">\r\n                          <tr>\r\n                                <td valign=\"top\">\r\n                                 <a href=\"{{store url=\"\"}}\"><img src=\"{{skin url=\"images/logo_email.gif\"}}\" alt=\"Magento\"  style=\"margin-bottom:10px;\" border=\"0\"/></a></td>\r\n                           </tr>\r\n                       </table>\r\n\r\n                    <!-- [ middle starts here] -->\r\n                      <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"650\">\r\n                          <tr>\r\n                                <td valign=\"top\">\r\n                             <p><strong>Hello {{var billing.name}}</strong>,<br/>\r\n                                Thank you for your order from Magento Demo Store. Once your package ships we will send an email with a link to track your order. You can check the status of your order by <a href=\"{{store url=\"customer/account/\"}}\" style=\"color:#1E7EC8;\">logging into your account</a>. If you have any questions about your order please contact us at <a href=\"mailto:dummyemail@magentocommerce.com\" style=\"color:#1E7EC8;\">dummyemail@magentocommerce.com</a> or call us at <span class=\"nobr\">(555) 555-0123</span> Monday - Friday, 8am - 5pm PST.</p>\r\n <p>Your order confirmation is below. Thank you again for your business.</p>\r\n                               \r\n                                <h3 style=\"border-bottom:2px solid #eee; font-size:1.05em; padding-bottom:1px; \">Your Order #{{var order.increment_id}} <small>(placed on {{var order.getCreatedAtFormated(\'long\')}})</small></h3>\r\n                              <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                 <thead>\r\n                                 <tr>\r\n                                        <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Billing \r\n                                       Information:</th>\r\n                                       <th width=\"3%\"></th>\r\n                                      <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Payment \r\n                                       Method:</th>\r\n                                    </tr>\r\n                                   </thead>\r\n                                    <tbody>\r\n                                 <tr>\r\n                                        <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\">{{var order.billing_address.getFormated(\'html\')}}</td>\r\n                                      <td>&nbsp;</td>\r\n                                     <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\"> {{var payment_html}}</td>\r\n                                 </tr>\r\n                                   </tbody>\r\n                                </table><br/>\r\n                                               <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                 <thead>\r\n                                 <tr>\r\n                                        <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Shipping \r\n                                      Information:</th>\r\n                                       <th width=\"3%\"></th>\r\n                                      <th align=\"left\" width=\"48.5%\" bgcolor=\"#d9e5ee\" style=\"padding:5px 9px 6px 9px; border:1px solid #bebcb7; border-bottom:none; line-height:1em;\">Shipping \r\n                                      Method:</th>\r\n                                    </tr>\r\n                                   </thead>\r\n                                    <tbody>\r\n                                 <tr>\r\n                                        <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\">{{var order.shipping_address.getFormated(\'html\')}}</td>\r\n                                     <td>&nbsp;</td>\r\n                                     <td valign=\"top\" style=\"padding:7px 9px 9px 9px; border:1px solid #bebcb7; border-top:0; background:#f8f7f5;\">{{var order.shipping_description}}</td>\r\n                                   </tr>\r\n                                   </tbody>\r\n                                </table><br/>\r\n\r\n{{var items_html}}<br/>\r\n      {{var order.getEmailCustomerNote()}}                          \r\n                                <p>Thank you again,<br/><strong>Magento Demo Store</strong></p>\r\n\r\n\r\n                             </td>\r\n                           </tr>\r\n                       </table>\r\n                    \r\n                    </td>\r\n               </tr>\r\n           </table>\r\n            </div>\r\n' WHERE template_code='New order (HTML)';
UPDATE {$this->getTable('core_email_template')} set template_text='<style type=\"text/css\">body,td { color:#2f2f2f; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; }</style>\r\n<div style=\"font:11px/1.35em Verdana, Arial, Helvetica, sans-serif;\">\r\n<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\" style=\"margin-top:10px; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; margin-bottom:10px;\"\">\r\n <tr>\r\n   <td align=\"center\" valign=\"top\">\r\n     <!-- [ header starts here] -->\r\n     <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"650\">\r\n      <tr>\r\n       <td valign=\"top\">\r\n        <a href=\"{{store url=\"\"}}\"><img src=\"{{skin url=\"images/logo_email.gif\"}}\" alt=\"Magento\"  style=\"margin-bottom:10px;\" border=\"0\"/></a></td>\r\n      </tr>\r\n     </table>\r\n\r\n     <!-- [ middle starts here] -->\r\n     <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"650\">\r\n       <tr>\r\n         <td valign=\"top\">\r\n           <p><strong>Dear {{var billing.name}}</strong>,<br/>\r\n            Your order # {{var order.increment_id}} has been <strong>{{var order.getStatusLabel()}}</strong>.</p>\r\n           <p>{{var comment}}</p>\r\n           <p>If you have any questions, please feel free to contact us at \r\n           <a href=\"mailto:magento@varien.com\" style=\"color:#1E7EC8;\">dummyemail@magentocommerce.com</a> or by phone at (555) 555-0123.</p>\r\n           <p>Thank you again,<br/><strong>Magento Demo Store</strong></p>\r\n      </td>\r\n     </tr>\r\n    </table>\r\n   </td>\r\n  </tr>\r\n </table>\r\n</div>\r\n' WHERE template_code='Order update (HTML)';

    DROP TABLE IF EXISTS {$this->getTable('sales_order_status')};

    ");

$installer->installEntities();

$installer->removeAttribute('order', 'order_status_id');
$installer->removeAttribute('order_status_history', 'comments');
$installer->removeAttribute('order_status_history', 'order_status_id');

$installer->endSetup();


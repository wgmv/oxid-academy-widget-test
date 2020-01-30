<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidAcademy\WidgetTest\Application\Component\Widget;

use OxidEsales\Eshop\Core\Registry;

/**
 * @inheritdoc
 */
class DateTimeWidget extends \OxidEsales\Eshop\Application\Component\Widget\WidgetController
{

    protected $_sThisTemplate = '/widget/header/oa_datetime_widget.tpl';

    /**
     * Returns if view should be cached
     *
     * @return bool
     */
//    public function isCacheable()
//    {
//        $sType = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('nocookie');
//
//        if ($sType) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}

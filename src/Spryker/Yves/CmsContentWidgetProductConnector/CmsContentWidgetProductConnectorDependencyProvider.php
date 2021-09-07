<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\CmsContentWidgetProductConnector;

use Spryker\Yves\CmsContentWidgetProductConnector\Dependency\Client\CmsContentWidgetProductConnectorToProductBridge;
use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

/**
 * @method \Spryker\Yves\CmsContentWidgetProductConnector\CmsContentWidgetProductConnectorConfig getConfig()
 */
class CmsContentWidgetProductConnectorDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const PRODUCT_CLIENT = 'PRODUCT CLIENT';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container)
    {
        $container->set(static::PRODUCT_CLIENT, function (Container $container) {
            return new CmsContentWidgetProductConnectorToProductBridge($container->getLocator()->product()->client());
        });

        return $container;
    }
}

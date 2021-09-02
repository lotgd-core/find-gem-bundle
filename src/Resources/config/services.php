<?php

/**
 * This file is part of "LoTGD Bundle Find Gem".
 *
 * @see https://github.com/lotgd-core/find-gem-bundle
 *
 * @license https://github.com/lotgd-core/find-gem-bundle/blob/master/LICENSE.txt
 * @author IDMarinas
 *
 * @since 0.1.0
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Lotgd\Bundle\FindGemBundle\OccurrenceSubscriber\FindGemSubscriber;
use Lotgd\Core\Http\Response;

return static function (ContainerConfigurator $container)
{
    $container->services()
        //-- OccurrenceSubscriber
        ->set(FindGemSubscriber::class)
            ->args([
                new ReferenceConfigurator('lotgd.core.log'),
                new ReferenceConfigurator(Response::class),
                new ReferenceConfigurator('twig'),
            ])
            ->tag('lotgd_core.occurrence_subscriber')
    ;
};

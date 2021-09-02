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

namespace Lotgd\Bundle\FindGemBundle\OccurrenceSubscriber;

use Lotgd\Bundle\FindGemBundle\LotgdFindGemBundle;
use Lotgd\Core\Http\Response;
use Lotgd\Core\Log;
use Lotgd\CoreBundle\OccurrenceBundle\OccurrenceSubscriberInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Twig\Environment;

class FindGemSubscriber implements OccurrenceSubscriberInterface
{
    public const TRANSLATION_DOMAIN = LotgdFindGemBundle::TRANSLATION_DOMAIN;

    private $log;
    private $response;
    private $twig;

    public function __construct(
        Log $log,
        Response $response,
        Environment $twig
    ) {
        $this->log       = $log;
        $this->response  = $response;
        $this->twig      = $twig;
    }

    public function findGem()
    {
        global $session;

        $session['user']['gems']++;

        $this->log->debug("found a gem in the dirt");

        $this->response->pageAddContent($this->twig->render('@LotgdFindGem/find.html.twig', ['translation_domain' => self::TRANSLATION_DOMAIN]));
    }

    public static function getSubscribedOccurrences()
    {
        return [
            'forest' => ['findGem', 10000, OccurrenceSubscriberInterface::PRIORITY_INFO],
            'travel' => ['findGem', 2000, OccurrenceSubscriberInterface::PRIORITY_INFO],
        ];
    }
}

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

namespace Lotgd\Bundle\FindGemBundle;

use Lotgd\Bundle\Contract\LotgdBundleInterface;
use Lotgd\Bundle\Contract\LotgdBundleTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class LotgdFindGemBundle extends Bundle implements LotgdBundleInterface
{
    use LotgdBundleTrait;
    public const TRANSLATION_DOMAIN = 'bundle_find_gem';

    /**
     * {@inheritDoc}
     */
    public function getLotgdName(): string
    {
        return 'Find Gem';
    }

    /**
     * {@inheritDoc}
     */
    public function getLotgdVersion(): string
    {
        return '0.1.1';
    }

    /**
     * {@inheritDoc}
     */
    public function getLotgdIcon(): ?string
    {
        return 'gem';
    }

    /**
     * {@inheritDoc}
     */
    public function getLotgdDescription(): string
    {
        return 'Special event that you can find gem in forest and when travel.';
    }

    /**
     * {@inheritDoc}
     */
    public function getLotgdDownload(): ?string
    {
        return 'https://github.com/lotgd-core/find-gem-bundle';
    }
}

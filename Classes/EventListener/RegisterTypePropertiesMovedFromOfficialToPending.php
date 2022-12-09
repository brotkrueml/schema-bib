<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_bib" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaBib\EventListener;

use Brotkrueml\Schema\Event\RegisterAdditionalTypePropertiesEvent;
use Brotkrueml\SchemaBib\Model\Type;

/**
 * The following properties has been available as official
 * but were moved because of reasons to pending again.
 * These properties are registered again to avoid
 * breaking changes.
 */
class RegisterTypePropertiesMovedFromOfficialToPending
{
    /**
     * @var array<class-string>
     */
    private $providerTypes = [
        Type\Atlas::class,
        Type\Audiobook::class,
        Type\Chapter::class,
        Type\Collection::class,
        Type\ComicCoverArt::class,
        Type\ComicIssue::class,
        Type\ComicSeries::class,
        Type\ComicStory::class,
        Type\CoverArt::class,
        Type\Newspaper::class,
        Type\Thesis::class,
    ];

    public function __invoke(RegisterAdditionalTypePropertiesEvent $event): void
    {
        $type = $event->getType();

        if (\in_array($type, $this->providerTypes, true)) {
            // from official to pending in schema version 15.0
            $event->registerAdditionalProperty('provider');
        }
    }
}

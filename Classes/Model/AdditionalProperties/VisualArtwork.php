<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_bib" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaBib\Model\AdditionalProperties;

use Brotkrueml\Schema\Core\AdditionalPropertiesInterface;

final class VisualArtwork implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'VisualArtwork';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'artist',
            'colorist',
            'inker',
            'letterer',
            'penciler',
            'publisherImprint',
            'translationOfWork',
            'workTranslation',
        ];
    }
}

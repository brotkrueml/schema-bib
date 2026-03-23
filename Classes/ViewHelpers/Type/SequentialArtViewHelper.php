<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_bib" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaBib\ViewHelpers\Type;

use Brotkrueml\Schema\Core\ViewHelpers\AbstractTypeViewHelper;

/**
 * An art forms that use images deployed in a specific order for the purpose of graphic storytelling (i.e., narration of graphic stories) or conveying information. Examples of SequentialArt are Franco-Belgian Bande Dessinée, Comics in the USA and 漫画 (Manga) in Japan.
 */
final class SequentialArtViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'SequentialArt';
}

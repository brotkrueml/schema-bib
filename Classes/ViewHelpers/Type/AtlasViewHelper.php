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
 * A collection or bound volume of maps, charts, plates or tables, physical or in media form illustrating any subject.
 */
final class AtlasViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'Atlas';
}

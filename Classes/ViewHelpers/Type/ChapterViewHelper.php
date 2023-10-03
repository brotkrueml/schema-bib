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
 * One of the sections into which a book is divided. A chapter usually has a section number or a name.
 */
final class ChapterViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'Chapter';
}

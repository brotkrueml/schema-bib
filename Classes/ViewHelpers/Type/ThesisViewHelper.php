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
 * A thesis or dissertation document submitted in support of candidature for an academic degree or professional qualification.
 */
final class ThesisViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'Thesis';
}

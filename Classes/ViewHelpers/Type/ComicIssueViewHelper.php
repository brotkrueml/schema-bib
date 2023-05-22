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
 * Individual comic issues are serially published as
 * part of a larger series. For the sake of consistency, even one-shot issues
 * belong to a series comprised of a single issue. All comic issues can be
 * uniquely identified by: the combination of the name and volume number of the
 * series to which the issue belongs; the issue number; and the variant
 * description of the issue (if any).
 */
final class ComicIssueViewHelper extends AbstractTypeViewHelper
{
}

<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_bib" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaBib\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * Individual comic issues are serially published as
 * part of a larger series. For the sake of consistency, even one-shot issues
 * belong to a series comprised of a single issue. All comic issues can be
 * uniquely identified by: the combination of the name and volume number of the
 * series to which the issue belongs; the issue number; and the variant
 * description of the issue (if any).
 */
#[Type('ComicIssue')]
final class ComicIssue extends AbstractType
{
    protected static array $propertyNames = [
        'about',
        'accessMode',
        'accessModeSufficient',
        'accessibilityAPI',
        'accessibilityControl',
        'accessibilityFeature',
        'accessibilityHazard',
        'accessibilitySummary',
        'accountablePerson',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'alternativeHeadline',
        'artist',
        'associatedMedia',
        'audience',
        'audio',
        'author',
        'award',
        'character',
        'citation',
        'colorist',
        'comment',
        'commentCount',
        'contentLocation',
        'contentRating',
        'contributor',
        'copyrightHolder',
        'copyrightYear',
        'countryOfOrigin',
        'creator',
        'dateCreated',
        'dateModified',
        'datePublished',
        'description',
        'disambiguatingDescription',
        'discussionUrl',
        'editor',
        'educationalAlignment',
        'educationalUse',
        'encoding',
        'encodingFormat',
        'exampleOfWork',
        'expires',
        'funder',
        'genre',
        'hasPart',
        'headline',
        'identifier',
        'image',
        'inLanguage',
        'inker',
        'interactionStatistic',
        'interactivityType',
        'isAccessibleForFree',
        'isBasedOn',
        'isFamilyFriendly',
        'isPartOf',
        'issueNumber',
        'keywords',
        'learningResourceType',
        'letterer',
        'license',
        'locationCreated',
        'mainEntity',
        'mainEntityOfPage',
        'material',
        'mentions',
        'name',
        'offers',
        'owner',
        'pageEnd',
        'pageStart',
        'pagination',
        'penciler',
        'position',
        'potentialAction',
        'producer',
        'publication',
        'publisher',
        'publisherImprint',
        'publishingPrinciples',
        'recordedAt',
        'releasedEvent',
        'review',
        'sameAs',
        'schemaVersion',
        'sourceOrganization',
        'spatial',
        'spatialCoverage',
        'sponsor',
        'subjectOf',
        'temporal',
        'temporalCoverage',
        'text',
        'thumbnail',
        'thumbnailUrl',
        'timeRequired',
        'translationOfWork',
        'translator',
        'typicalAgeRange',
        'url',
        'variantCover',
        'version',
        'video',
        'wordCount',
        'workExample',
        'workTranslation',
    ];
}

<?php
declare(strict_types=1);

namespace Brotkrueml\SchemaBib\EventListener;

use Brotkrueml\Schema\Event\RegisterAdditionalTypePropertiesEvent;
use Brotkrueml\Schema\Model\Type;
use Brotkrueml\SchemaHealth\Model\Type as HealthType;
use Brotkrueml\SchemaPending\Model\Type as PendingType;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

final class RegisterAdditionalProperties
{
    public function __invoke(RegisterAdditionalTypePropertiesEvent $event): void
    {
        if ($event->getType() === Type\APIReference::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\AboutPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Answer::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Article::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\AudioObject::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Barcode::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Blog::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\BlogPosting::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Book::class) {
            $event->registerAdditionalProperty('abridged');
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\BookSeries::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\BroadcastEvent::class) {
            $event->registerAdditionalProperty('publishedBy');
        }
        if ($event->getType() === Type\CheckoutPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ClaimReview::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Clip::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\CollectionPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Comment::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ContactPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Conversation::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Course::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\CreativeWork::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\CreativeWorkSeason::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\CreativeWorkSeries::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\DataCatalog::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\DataDownload::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\DataFeed::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Dataset::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\DigitalDocument::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\DiscussionForumPosting::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\EmailMessage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Episode::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\FAQPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Game::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\HowTo::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\HowToDirection::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\HowToSection::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\HowToStep::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\HowToTip::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ImageGallery::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ImageObject::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ItemPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\LiveBlogPosting::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Map::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MediaGallery::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MediaObject::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Menu::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MenuSection::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Message::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MobileApplication::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Movie::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MovieClip::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MovieSeries::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MusicAlbum::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MusicComposition::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MusicPlaylist::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MusicRecording::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MusicRelease::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\MusicVideoObject::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\NewsArticle::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\NoteDigitalDocument::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\OnDemandEvent::class) {
            $event->registerAdditionalProperty('publishedBy');
        }
        if ($event->getType() === Type\Painting::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Periodical::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Photograph::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\PresentationDigitalDocument::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ProfilePage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\PublicationEvent::class) {
            $event->registerAdditionalProperty('publishedBy');
        }
        if ($event->getType() === Type\PublicationIssue::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\PublicationVolume::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\QAPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Question::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\RadioClip::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\RadioEpisode::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\RadioSeason::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\RadioSeries::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Recipe::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Report::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Review::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\ScholarlyArticle::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Sculpture::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\SearchResultsPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\SiteNavigationElement::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\SocialMediaPosting::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\SoftwareApplication::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\SoftwareSourceCode::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\SpreadsheetDigitalDocument::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\TVClip::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\TVEpisode::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\TVSeason::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\TVSeries::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\Table::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\TechArticle::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\TextDigitalDocument::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\VideoGallery::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\VideoGame::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\VideoGameClip::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\VideoGameSeries::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\VideoObject::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\VisualArtwork::class) {
            $event->registerAdditionalProperty('artist');
            $event->registerAdditionalProperty('colorist');
            $event->registerAdditionalProperty('inker');
            $event->registerAdditionalProperty('letterer');
            $event->registerAdditionalProperty('penciler');
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WPAdBlock::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WPFooter::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WPHeader::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WPSideBar::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WebApplication::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WebPage::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WebPageElement::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if ($event->getType() === Type\WebSite::class) {
            $event->registerAdditionalProperty('publisherImprint');
            $event->registerAdditionalProperty('translationOfWork');
            $event->registerAdditionalProperty('workTranslation');
        }
        if (ExtensionManagementUtility::isLoaded('schema_health')) {
            if ($event->getType() === HealthType\Diet::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === HealthType\ExercisePlan::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === HealthType\MedicalScholarlyArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === HealthType\MedicalWebPage::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
        }
        if (ExtensionManagementUtility::isLoaded('schema_pending')) {
            if ($event->getType() === PendingType\AdvertiserContentArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\AmpStory::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\AnalysisNewsArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\ArchiveComponent::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\AskPublicNewsArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\BackgroundNewsArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\CategoryCodeSet::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Claim::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\CompleteDataFeed::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\CorrectionComment::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\CriticReview::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\DefinedTermSet::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Drawing::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\EducationalOccupationalCredential::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\EmployerReview::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Guide::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\HealthTopicContent::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\HyperToc::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\HyperTocEntry::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\LearningResource::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Legislation::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\LegislationObject::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Manuscript::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\MathSolver::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\MediaReview::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\OpinionNewsArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Play::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\PodcastEpisode::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\PodcastSeason::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\PodcastSeries::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Poster::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\ProductCollection::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Quiz::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Quotation::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\RealEstateListing::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\Recommendation::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\ReportageNewsArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\ReviewNewsArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\SatiricalArticle::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\SheetMusic::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\ShortStory::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\SpecialAnnouncement::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\UserReview::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\WebContent::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
            if ($event->getType() === PendingType\_3DModel::class) {
                $event->registerAdditionalProperty('publisherImprint');
                $event->registerAdditionalProperty('translationOfWork');
                $event->registerAdditionalProperty('workTranslation');
            }
        }
    }
}

<?php

// Set up extensions for use on wikis that are not global
if ( $wmgUseAccessControl ) {
	require_once( "$IP/extensions/AccessControl/AccessControl.php" );
}

if ( $wmgUseAddHTMLMetaAndTitle ) {
	require_once( "$IP/extensions/AddHTMLMetaAndTitle/Add_HTML_Meta_and_Title.php" );
}

if ( $wmgUseAdminLinks ) {
	require_once( "$IP/extensions/AdminLinks/AdminLinks.php" );
}

if ( $wmgUseAJAXPoll ) {
	wfLoadExtension( 'AJAXPoll' );
	// Hiding information is not the wiki way
	$wgGroupPermissions['*']['ajaxpoll-view-results'] = true;
	$wgGroupPermissions['*']['ajaxpoll-view-results-before-vote'] = true;
}

if ( $wmgUseApex ) {
	wfLoadSkin( 'apex' );
}

if ( $wmgUseArticleFeedbackv5 ) {
	wfLoadExtension( 'ArticleFeedbackv5' );
}

if ( $wmgUseArticleRatings ) {
	wfLoadExtension( 'ArticleRatings' );
}

if ( $wmgUseAuthorProtect ) {
	require_once( "$IP/extensions/AuthorProtect/AuthorProtect.php" );
}

if ( $wmgUseAutoCreateCategoryPages ) {
	wfLoadExtension( 'AutoCreateCategoryPages' );
}

if ( $wmgUseAutomaticBoardWelcome ) {
	wfLoadExtension( 'AutomaticBoardWelcome' );
}

if ( $wmgUseBlogPage ) {
	require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
	wfLoadExtension( 'BlogPage' );
	$wgBlogPageDisplay['comments_of_day'] = false;
}

if ( $wmgUseBootstrapMediawiki ) {
	require_once( "$IP/skins/BootstrapMediawiki/bootstrap-mediawiki.php" );
}

if ( $wmgUseMSCalendar ) {
	wfLoadExtension( 'MsCalendar' );
}

if ( $wmgUseCategoryTree ) {
	wfLoadExtension( 'CategoryTree' );
}

if ( $wmgUseCharInsert ) {
	wfLoadExtension( 'CharInsert' );
}

if ( $wmgUseCollapsibleVector ) {
	wfLoadExtension( 'CollapsibleVector' );
}

if ( $wmgUseComments ) {
	wfLoadExtension( 'Comments' );
}

if ( $wmgUseContactPage ) {
	wfLoadExtension( 'ContactPage' );

	// Contact Page is a fairly complex (well long) extension to configure.
	// All config should be in the file below on a wikidb basis.
	require_once( "/srv/mediawiki/config/ContactPage.php" );
}

if ( $wmgUseContributionScores ) {
	require_once( "$IP/extensions/ContributionScores/ContributionScores.php" );
}


if ( $wmgUseCookieWarning ) {
	wfLoadExtension( 'CookieWarning' );
	// Geolocate here to determine to whom to show the cookie warning
	$wgCookieWarningEnabled = true;
	// Haha just kidding -- annoy everyone
}

if ( $wmgUseCreatePage ) {
	require_once( "$IP/extensions/CreatePage/CreatePage.php" );
}

if ( $wmgUseCreateRedirect ) {
	require_once( "$IP/extensions/CreateRedirect/CreateRedirect.php" );
}

if ( $wmgUseCreateWiki ) {
	wfLoadExtension( 'CreateWiki' );
	$wgCreateWikiSQLfiles = $wmgCreateWikiSQLfiles;
}

if ( $wmgUseCrossReference ) {
	require_once( "$IP/extensions/CrossReference/CrossReference.php" );
}

if ( $wmgUseCSS ) {
	require_once( "$IP/extensions/CSS/CSS.php" );
}

if ( $wmgUseCustomHeader ) {
	wfLoadExtension( 'CustomHeader' );
}

if ( $wmgUseCustomNavBlocks) {
	require_once( "$IP/extensions/CustomNavBlocks/CustomNavBlocks.php" );
	$wgCustomNavBlocksEnable = true;
}

if ( $wmgUseDarkVector ) {
	wfLoadSkin( 'DarkVector' );
}

if ( $wmgUseDismissableSiteNotice ) {
	wfLoadExtension( 'DismissableSiteNotice' );
}

if ( $wmgUseDuskToDawn ) {
	wfLoadSkin( 'DuskToDawn' );
}

if ( $wmgUseDPLForum ) {
	require_once( "$IP/extensions/DPLForum/DPLforum.php" );
}

if ( $wmgUseDuplicator ) {
	require_once( "$IP/extensions/Duplicator/Duplicator.php" );
}

if ( $wmgUseDynamicPageList ) {
	wfLoadExtension( 'DynamicPageList' );
}

if ( $wmgUseDynamicPageList3 ) {
	require_once( "$IP/extensions/DynamicPageList3/DynamicPageList.php" );
}

if ( $wmgUseEditcount ) {
    wfLoadExtension( 'Editcount' );
}

if ( $wmgUseEditSubpages ) {
	require_once( "$IP/extensions/EditSubpages/EditSubpages.php" );
}

if ( $wmgUseEducationProgram ) {
	require_once( "$IP/extensions/EducationProgram/EducationProgram.php" );
}

if ( $wmgUseErudite ) {
	wfLoadSkin( 'erudite' );
}

if ( $wmgUseEventLogging) {
	wfLoadExtension( 'EventLogging' );
	$wgEventLoggingBaseUri = 'http://localhost:8080/event.gif';
	$wgEventLoggingFile = '$wmgLogDir/debuglogs/events.log';
}

if ( $wmgUseFancyBoxThumbs ) {
	require_once( "$IP/extensions/FancyBoxThumbs/FancyBoxThumbs.php" );
}

if ( $wmgUseFlaggedRevs ) {
	require_once( "$IP/extensions/FlaggedRevs/FlaggedRevs.php" );

	$wgFlaggedRevsNamespaces = $wmgFlaggedRevsNamespaces;
	$wgFlaggedRevsProtection = $wmgFlaggedRevsProtection;
	$wgFlaggedRevsTags = $wmgFlaggedRevsTags;
	$wgFlaggedRevsTagsRestrictions = $wmgFlaggedRevsTagsRestrictions;
	$wgFlaggedRevsTagsAuto = $wmgFlaggedRevsTagsAuto;
	$wgFlaggedRevsAutopromote = $wmgFlaggedRevsAutopromote;
	$wgFlaggedRevsAutoReview = $wmgFlaggedRevsAutoReview;
	$wgFlaggedRevsRestrictionLevels = $wmgFlaggedRevsRestrictionLevels;

}

if ( $wmgUseFlow ) {
	require_once( "$IP/extensions/Flow/Flow.php" );
	$wgGroupPermissions['bureaucrat']['flow-create-board'] = true;

	$wgVirtualRestConfig['modules']['parsoid'] = array(
		'url' => 'https://parsoid1.miraheze.org:443',
		'prefix' => $wgDBname,
		'forwardCookies' => true,
	);

	$wgFlowEditorList = $wmgFlowEditorList;
}

if ( $wmgFlowDefaultNamespaces && $wmgUseFlow ) {
	$wgNamespaceContentModels = array(
		NS_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_USER_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_PROJECT_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_FILE_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_MEDIAWIKI_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_TEMPLATE_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_HELP_TALK => CONTENT_MODEL_FLOW_BOARD,
		NS_CATEGORY_TALK => CONTENT_MODEL_FLOW_BOARD,
	) + $wgNamespaceContentModels;
}

if ( $wmgUseFeaturedFeeds ) {
	wfLoadExtension( 'FeaturedFeeds' );
}

if ( $wmgUseForeground ) {
	wfLoadSkin( 'foreground' );
}

if ( $wmgUseGamepress ) {
    wfLoadSkin( 'Gamepress' );
}

if ( $wmgUseGraph ) {
	wfLoadExtension( 'Graph' );
}

if ( $wmgUseGroupsSidebar ) {
	require_once( "$IP/extensions/GroupsSidebar/GroupsSidebar.php" );
}

if ( $wmgUseGuidedTour ) {
	wfLoadExtension( 'GuidedTour' );
}

if ( $wmgUseHeaderTabs ) {
	wfLoadExtension( 'HeaderTabs' );
	if ( $wgDBname == 'extloadwiki' ) {
		// load LC despite SectionHide's strong objections
		unset( $htUseHistory );
	}
}

if ( $wmgUseHideSection ) {
	wfLoadExtension( 'HideSection' );
}

if ( $wmgUseHighlightLinksInCategory ) {
	wfLoadExtension( 'HighlightLinksInCategory' );
}

if ( $wmgUseImageMap ) {
	wfLoadExtension( 'ImageMap' );
}

if ( $wmgUseJavascriptSlideshow ) {
	require_once( "$IP/extensions/JavascriptSlideshow/JavascriptSlideshow.php" );
}

if ( $wmgUseJosa ) {
	wfLoadExtension( 'Josa' );
}

if ( $wmgUseLabeledSectionTransclusion ) {
	wfLoadExtension( 'LabeledSectionTransclusion' );
}

if ( $wmgUseLinkSuggest ) {
	wfLoadExtension( 'LinkSuggest' );
}

if ( $wmgUseLoopsCombo ) {
	require_once( "$IP/extensions/Variables/Variables.php" );
	require_once( "$IP/extensions/Loops/Loops.php");
}

if ( $wmgUseMaps ) {
	require_once( "$IP/extensions/Maps/Maps.php" );
	$egMapsDefaultService = 'openlayers';
	$egMapsDisableSmwIntegration = true;
}

if ( $wmgUseMassEditRegex ) {
	require_once( "$IP/extensions/MassEditRegex/MassEditRegex.php" );
	$wgGroupPermissions['sysop']['masseditregex'] = true;
}

if ( $wmgUseMediaWikiChat ) {
	wfLoadExtension( 'MediaWikiChat' );
}

if ( $wmgUseMetrolook ) {
	wfLoadSkin( 'Metrolook' );
}

if ( $wmgUseMobileFrontend ) {
	wfLoadExtension( 'MobileFrontend' );

	$wgMFAutodetectMobileView = $wmgMFAutodetectMobileView;
}

if ( $wmgUseModernSkylight ) {
	wfLoadSkin( 'ModernSkylight' );
}

if ( $wmgUseMonaco ) {
	require_once( "$IP/skins/Monaco/monaco.php" );
}

if ( $wmgUseMsPackage ) {
	wfLoadExtension( 'MsUpload' );
	require_once( "$IP/extensions/MsLinks/MsLinks.php" );
	require_once( "$IP/extensions/MsCatSelect/MsCatSelect.php" );
}

if ( $wmgUseMsUpload ) {
	wfLoadExtension( 'MsUpload' );
}

if ( $wmgUseMultimediaViewer ) {
	wfLoadExtension( 'MultimediaViewer' );
}

if ( $wmgUseMultiBoilerplate ) {
	wfLoadExtension( 'MultiBoilerplate' );
	$wgMultiBoilerplateDisplaySpecialPage = true;
	$wgMultiBoilerplateOptions = false;
}

if ( $wmgUseNewestPages ) {
	wfLoadExtension( 'NewestPages' );
}

if ($wmgUseNews ) {
	require_once( "$IP/extensions/News/News.php" );
}

if ( $wmgUseNewSignupPage ) {
	wfLoadExtension( 'NewSignupPage' );
}

if ( $wmgUseNewsletter ) {
	wfLoadExtension( 'Newsletter' );
	$wgGroupPermissions['confirmed']['newsletter-create'] = true;
}

if ( $wmgUseNewUserMessage ) {
	wfLoadExtension( 'NewUserMessage' );
}

if ( $wmgUseNewUsersList ) {
	wfLoadExtension( 'NewUsersList' );
}

if ( $wmgUseNostalgia ) {
	wfLoadSkin( 'Nostalgia' );
}

if ( $wmgUseNoTitle ) {
	require_once( "$IP/extensions/NoTitle/NoTitle.php" );
	$wgRestrictDisplayTitle = false;
}

if ( $wmgUseOpenGraphMeta ) {
	require_once( "$IP/extensions/OpenGraphMeta/OpenGraphMeta.php" );
}

if ( $wmgUsePagedTiffHandler ) {
	wfLoadExtension( 'PagedTiffHandler' );
}

if ( $wmgUsePageForms ) {
	wfLoadExtension( 'PageForms' );
}

if ( $wmgUsePageNotice ) {
	require_once( "$IP/extensions/PageNotice/PageNotice.php" );
}

if ( $wmgUsePageTriage ) {
	require_once( "$IP/extensions/PageTriage/PageTriage.php" );
}

if ( $wmgUsePDFEmbed ) {
	require_once( "$IP/extensions/PDFEmbed/PDFEmbed.php" );
}

if ( $wmgUsePdfHandler ) {
	wfLoadExtension( 'PdfHandler' );
}

if ( $wmgUsePoll ) {
	require_once( "$IP/extensions/Poll/Poll.php" );
}

if ( $wmgUsePopups ) {
	wfLoadExtension( 'PageImages' );
	wfLoadExtension( 'Popups' );
	wfLoadExtension( 'TextExtracts' );
}

if ( $wmgUseProofreadPage ) {
	wfLoadExtension( 'ProofreadPage' );

	$wgExtraNamespaces[NS_PROOFREAD_PAGE] = 'Page';
	$wgExtraNamespaces[NS_PROOFREAD_PAGE_TALK] = 'Page_talk';
	$wgExtraNamespaces[NS_PROOFREAD_INDEX] = 'Index';
	$wgExtraNamespaces[NS_PROOFREAD_INDEX_TALK] = 'Index_talk';
	$wgProofreadPageNamespaceIds = array(
		'index' => NS_PROOFREAD_INDEX,
		'page' => NS_PROOFREAD_PAGE
	);
}

if ( $wmgUseProtectSite ) {
	wfLoadExtension( 'ProtectSite' );
}

if ( $wmgUseQuiz ) {
	wfLoadExtension( 'Quiz' );
}

if ( $wmgUseRandomSelection ) {
	require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
}

if ( $wmgUseRefreshed ) {
	wfLoadSkin( 'Refreshed' );
}

if ( $wmgUseRelatedArticles ) {
	wfLoadExtension( 'RelatedArticles' );
}

if ( $wmgUseReplaceText ) {
	wfLoadExtension( 'ReplaceText' );
}

if ( $wmgUseRSS ) {
	wfLoadExtension( 'RSS' );
	$wgRSSUrlWhitelist = array( "*" );
}

if ( $wmgUseSandboxLink ) {
	wfLoadExtension ( 'SandboxLink' );
}

if ( $wmgUseScratchBlocks ) {
	wfLoadExtension( "ScratchBlocks" );
}

if ( $wmgUseSimpleChanges ) {
	require_once( "$IP/extensions/SimpleChanges/SimpleChanges.php" );
}

if ( $wmgUseSyntaxHighlight ) {
        $wgScribuntoUseGeSHi = true;
}

if ( $wmgUseShortURL ) {
	wfLoadExtension ( 'UrlShortener' );
}

if ( $wmgUseSimpleTooltip ) {
	require_once( "$IP/extensions/SimpleTooltip/SimpleTooltip.php" );
}

if ( $wmgUseSiteScout ) {
	wfLoadExtension( 'SiteScout' );
}

if ( $wmgUseSocialProfile ) {
	require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
	unset( $wgGroupPermissions['staff'] );
	$wgGroupPermissions['sysop']['editothersprofiles'] = true;
}

if ( $wmgUseSpoilers ) {
	wfLoadExtension( 'Spoilers' );
}

if ( $wmgUseSubpageFun ) {
	require_once( "$IP/extensions/SubpageFun/SubpageFun.php" );
}

if ( $wmgUseSubPageList3 ) {
	require_once( "$IP/extensions/SubPageList3/SubPageList3.php" );
}

if ( $wmgUseSyntaxHighlight ) {
	wfLoadExtension( 'SyntaxHighlight_GeSHi' );
}

if ( $wmgUseTabsCombination ) {
	require_once( "$IP/extensions/Tabber/Tabber.php" );
	require_once( "$IP/extensions/Tabs/Tabs.php" );
}

if ( $wmgUseTemplateSandbox ) {
	wfLoadExtension( 'TemplateSandbox' );
}

if ( $wmgUseTimeless ) {
	wfLoadSkin( 'Timeless' );
}

if ( $wmgUseTranslate ) {
	wfLoadExtension( 'UniversalLanguageSelector' );
	require_once( "$IP/extensions/Translate/Translate.php" );
	$wgGroupPermissions['sysop']['pagetranslation'] = true;
	$wgGroupPermissions['sysop']['translate-import'] = true;
	$wgGroupPermissions['sysop']['translate-manage'] = true;
	$wgGroupPermissions['*']['translate'] = true;
	$wgGroupPermissions['user']['translate-messagereview'] = true;
	$wgGroupPermissions['translate-proofr']['translate-messagereview'] = false;
	$wgAddGroups['translate-proofr'] = false;
	// unset this unused group already
	unset( $wgGroupPermissions['translate-proofr'] );
	$wgTranslateBlacklist = $wmgTranslateBlacklist;
	$wgTranslateTranslationServices = $wmgTranslateTranslationServices;
	$wgTranslateDocumentationLanguageCode = $wmgTranslateDocumentationLanguageCode;
	require_once( "/srv/mediawiki/config/TranslateConfigHack.php" );
	$wgULSGeoService = false;
}

if ( $wmgUseTheme ) {
	wfLoadExtension( 'Theme' );
}

if ( $wmgUseTimedMediaHandler ) {
	wfLoadExtension( 'MwEmbedSupport' );
	require_once( "$IP/extensions/TimedMediaHandler/TimedMediaHandler.php" );
	$wgFFmpeg2theoraLocation = '/usr/bin/ffmpeg2theora';
}

if ( $wmgUseTitleKey ) {
	wfLoadExtension( 'TitleKey' );
}

if ( $wmgUseTocTree ) {
	wfLoadExtension( 'TocTree' );
}

if ( $wmgUseTweeki ) {
	wfLoadSkin( 'Tweeki' );
}

if ( $wmgUseUserWelcome ) {
	require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
    require_once( "$IP/extensions/SocialProfile/UserWelcome/UserWelcome.php" );
}

if ( $wmgUseVariables ) {
	require_once( "$IP/extensions/Variables/Variables.php" );
}

if ( $wmgUseVisualEditor ) {
	wfLoadExtension ( 'VisualEditor' );
	
	$wgVirtualRestConfig['modules']['parsoid'] = array(
		'url' => 'https://parsoid1.miraheze.org:443',
		'prefix' => $wgDBname,
		'forwardCookies' => true,
	);


	if ( $wmgVisualEditorEnableDefault ) {
		$wgDefaultUserOptions['visualeditor-enable'] = 1;
		$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";
	} else {
		$wgDefaultUserOptions['visualeditor-enable'] = 0;
	}

	$wgVisualEditorAvailableNamespaces = $wmgVisualEditorAvailableNamespaces;

	// Load TemplateData
	wfLoadExtension( 'TemplateData' );
}

if ( $wmgUseVoteNY ) {
	wfLoadExtension( 'VoteNY' );
}

if ( $wmgUseWebChat ) {
	require_once( "$IP/extensions/WebChat/WebChat.php" );
	$wgWebChatClient = $wmgWebChatClient;
	$wgWebChatServer = $wmgWebChatServer;
	$wgWebChatChannel = $wmgWebChatChannel;
}

if ( $wmgUseWhoIsWatching ) {
	require_once( "$IP/extensions/WhoIsWatching/WhoIsWatching.php" );
}

if ( $wmgUseWidgets ) {
	require_once( "$IP/extensions/Widgets/Widgets.php" );
}

if ( $wmgUseWikibaseRepository ) {
	$wgEnableWikibaseRepo = true;
	require_once( "$IP/extensions/Wikibase/repo/Wikibase.php" );

	// Includes Wikibase Configuration. There is a global and per-wiki system here.
	require_once( "/srv/mediawiki/config/Wikibase.php" );
}

if ( $wmgUseWikiForum ) {
	wfLoadExtension( 'WikiForum' );
}

if ( $wmgUsewikihiero ) {
	wfLoadExtension( 'wikihiero' );
}

if ( $wmgUseWikiLove ) {
	wfLoadExtension( 'WikiLove' );
}

if ( $wmgUseWikiTextLoggedInOut ) {
	wfLoadExtension( 'WikiTextLoggedInOut' );
}

if ( $wmgUseYouTube ) {
	require_once( "$IP/extensions/YouTube/YouTube.php" );
}

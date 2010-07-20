<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/** ********************************************************************************** 
 * PAGE-Configuration
 ********************************************************************************** **/
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/config/', 'config');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/page/', 'page');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/page.headerdata/', 'page.headerData');
// Style-Content
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/style.content/', 'style.content');
// CSS to TS
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/template.csstsproperties/', 'template.CssTsProperties');

/** ********************************************************************************** 
 * Content-Configuration
 ********************************************************************************** **/
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/tt_content/', 'tt_content');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.stdheader/', 'lib.stdheader');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.parsefunc_rte/', 'lib.parseFunc_RTE');

/** ********************************************************************************** 
 * TemplaVoila-Config (inkl. Slide)
 ********************************************************************************** **/
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.templavoila/', 'ext.templavoila');

t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ce.header_content.slide/', 'ce.header_content.slide');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ce.teaser_content.slide/', 'ce.teaser_content.slide');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ce.col1_content_content.slide/', 'ce.col1_content_content.slide');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ce.col2_content_content.slide/', 'ce.col2_content_content.slide');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ce.col3_content_content.slide/', 'ce.col3_content_content.slide');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ce.footer_content.slide/', 'ce.footer_content.slide');

/** ********************************************************************************** 
 * LIB-Configuration
 ********************************************************************************** **/
// Navigation
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.topnav/', 'lib.topnav');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.nav/', 'lib.nav');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.submenu/', 'lib.submenu');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.impressum/', 'lib.impressum');

// Header-Background-Image
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.header_style/', 'lib.header_style');

// Suche
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.search/', 'lib.search');

/** ********************************************************************************** 
 * EXT-Configuration
 ********************************************************************************** **/
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.indexed_search/', 'ext.indexed_search');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.m1_google_analytics/', 'ext.m1_google_analytics');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.powermail/', 'ext.powermail');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.ve_guestbook/', 'ext.ve_guestbook');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.wt_spamshield/', 'ext.wt_spamshield');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.commerce/', 'ext.commerce');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.felogin/', 'ext.felogin');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.sr_feuser_register/', 'ext.sr_feuser_register');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.cal/', 'ext.cal');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.tt_news/', 'ext.tt_news');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.wec_map/', 'ext.wec_map');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.rzcolorbox/', 'ext.rzcolorbox');

// Newsletter
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.sr_email_subscribe/', 'ext.sr_email_subscribe');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/ext.direct_mail/', 'ext.direct_mail');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/plugin.alt.plaintext/', 'plugin.alt.plaintext');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.nl_show_page/', 'lib.nl_show_page');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.nl_header/', 'lib.nl_header');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.nl_header_link/', 'lib.nl_header_link');
t3lib_extMgm::addStaticFile($_EXTKEY,'fileadmin/ts/lib.nl_unsubscribe/', 'lib.nl_unsubscribe');

/** ********************************************************************************** 
 * ZALOM-Configuration (Im ExtensionsManager)
 ********************************************************************************** **/
$ZalomConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
$TCA['tt_content']['ctrl']['dividers2tabs'] = $ZalomConfig['dividers2tabs'];

?>
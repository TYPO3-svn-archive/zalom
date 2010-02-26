<?php

########################################################################
# Extension Manager/Repository config file for ext: "zalom"
#
# Auto generated 21-10-2009 10:09
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Framework for ZALOM',
	'description' => '',
	'category' => 'services',
	'author' => 'Juerg Langhard',
	'author_email' => 'juerg@digicom-medien.ch',
	'shy' => '',
	'dependencies' => 't3jquery',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'Digicom digitale Medien AG',
	'version' => '0.2.7',
	'constraints' => array(
		'depends' => array(
			't3jquery' => ''
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:91:{s:9:"ChangeLog";s:4:"531e";s:21:"ext_conf_template.txt";s:4:"544c";s:12:"ext_icon.gif";s:4:"f35d";s:17:"ext_localconf.php";s:4:"466d";s:14:"ext_tables.php";s:4:"3c90";s:22:"database/be_groups.sql";s:4:"c048";s:21:"database/be_users.sql";s:4:"8473";s:22:"database/fe_groups.sql";s:4:"2812";s:17:"database/page.sql";s:4:"fa17";s:25:"database/sys_dmail_MT.sql";s:4:"339f";s:27:"database/tx_commerce_MT.sql";s:4:"4a46";s:32:"fileadmin/userTSconfig/admin.txt";s:4:"390c";s:33:"fileadmin/userTSconfig/editor.txt";s:4:"0719";s:48:"fileadmin/ts/page.config.headercomment/setup.txt";s:4:"5e4f";s:41:"fileadmin/ts/ext.indexed_search/setup.txt";s:4:"4e00";s:39:"fileadmin/ts/lib.header_style/setup.txt";s:4:"6010";s:44:"fileadmin/ts/lib.nl_header_content/setup.txt";s:4:"2f37";s:38:"fileadmin/ts/page.headerdata/setup.txt";s:4:"1310";s:46:"fileadmin/ts/ext.m1_google_analytics/setup.txt";s:4:"b04b";s:40:"fileadmin/ts/style.content/constants.txt";s:4:"531e";s:49:"fileadmin/ts/ext.sr_feuser_register/constants.txt";s:4:"7d39";s:45:"fileadmin/ts/ext.sr_feuser_register/setup.txt";s:4:"510d";s:36:"fileadmin/ts/lib.nl_header/setup.txt";s:4:"6310";s:39:"fileadmin/ts/ext.commerce/constants.txt";s:4:"ddb7";s:35:"fileadmin/ts/ext.commerce/setup.txt";s:4:"5be6";s:44:"fileadmin/ts/ext.wt_spamshield/constants.txt";s:4:"4a5e";s:40:"fileadmin/ts/ext.wt_spamshield/setup.txt";s:4:"ad2f";s:41:"fileadmin/ts/ext.sr_freecap/constants.txt";s:4:"68e6";s:37:"fileadmin/ts/ext.sr_freecap/setup.txt";s:4:"ac63";s:43:"fileadmin/ts/ext.ve_guestbook/constants.txt";s:4:"971a";s:39:"fileadmin/ts/ext.ve_guestbook/setup.txt";s:4:"5287";s:33:"fileadmin/ts/lib.search/setup.txt";s:4:"4e17";s:34:"fileadmin/ts/page.config/setup.txt";s:4:"99c1";s:33:"fileadmin/ts/lib.topnav/setup.txt";s:4:"c07c";s:34:"fileadmin/ts/ext.felogin/setup.txt";s:4:"3e2d";s:46:"fileadmin/ts/ext.perfectlightbox/constants.txt";s:4:"2c61";s:42:"fileadmin/ts/ext.perfectlightbox/setup.txt";s:4:"3fb8";s:30:"fileadmin/ts/lib.nav/setup.txt";s:4:"cdb6";s:36:"fileadmin/ts/lib.stdheader/setup.txt";s:4:"3277";s:31:"fileadmin/ts/page/constants.txt";s:4:"029a";s:27:"fileadmin/ts/page/setup.txt";s:4:"1938";s:51:"fileadmin/ts/template.csstsproperties/constants.txt";s:4:"c8a8";s:40:"fileadmin/ts/ext.powermail/constants.txt";s:4:"1ac8";s:36:"fileadmin/ts/ext.powermail/setup.txt";s:4:"0e3d";s:40:"fileadmin/ts/lib.parsefunc_rte/setup.txt";s:4:"4f5e";s:34:"fileadmin/ts/lib.submenu/setup.txt";s:4:"a477";s:29:"fileadmin/ts/config/setup.txt";s:4:"d0b3";s:41:"fileadmin/ts/lib.nl_header_link/setup.txt";s:4:"8db1";s:33:"fileadmin/ts/tt_content/setup.txt";s:4:"1458";s:44:"fileadmin/ext/commerce/category_product.html";s:4:"9d95";s:34:"fileadmin/ext/commerce/invoice.tpl";s:4:"d934";s:39:"fileadmin/ext/commerce/shoppingcart.tpl";s:4:"e1dc";s:45:"fileadmin/ext/commerce/template_addresses.tpl";s:4:"c10c";s:45:"fileadmin/ext/commerce/template_adminmail.tpl";s:4:"dbaf";s:44:"fileadmin/ext/commerce/template_checkout.tpl";s:4:"2466";s:44:"fileadmin/ext/commerce/template_usermail.tpl";s:4:"e1d1";s:46:"fileadmin/ext/xxxpowermail/tmpl_fieldwrap.html";s:4:"e73f";s:54:"fileadmin/ext/xxxpowermail/css/screen/xxxpowermail.css";s:4:"23dd";s:39:"fileadmin/ext/templavoila/ds/ds_id2.xml";s:4:"09b4";s:48:"fileadmin/ext/indexed_search/indexed_search.html";s:4:"ecd8";s:58:"fileadmin/ext/indexed_search/css/screen/indexed_search.css";s:4:"8309";s:56:"fileadmin/ext/direct_mail/html_email_basic_template.html";s:4:"5006";s:63:"fileadmin/ext/direct_mail/html_email_newsletter_template_a.html";s:4:"ac59";s:63:"fileadmin/ext/direct_mail/html_email_newsletter_template_b.html";s:4:"d16b";s:46:"fileadmin/ext/direct_mail/img/logo_2column.jpg";s:4:"5d25";s:45:"fileadmin/ext/direct_mail/img/logo_header.jpg";s:4:"729b";s:47:"fileadmin/ext/direct_mail/img/postcard_logo.gif";s:4:"3173";s:43:"fileadmin/ext/direct_mail/img/thm/basic.gif";s:4:"6cf0";s:49:"fileadmin/ext/direct_mail/img/thm/left_column.gif";s:4:"e96e";s:50:"fileadmin/ext/direct_mail/img/thm/right_column.gif";s:4:"ab9e";s:47:"fileadmin/ext/xxxve_guestbook/ve_guestbook.html";s:4:"2c8e";s:57:"fileadmin/ext/xxxve_guestbook/css/screen/ve_guestbook.css";s:4:"1f7c";s:30:"fileadmin/pageTSconfig/RTE.txt";s:4:"dd5d";s:38:"fileadmin/pageTSconfig/direct_mail.txt";s:4:"8196";s:41:"class/backend/login/class.ux_SC_index.php";s:4:"5db9";s:46:"class/backend/mod1/class.tx_zalom_database.php";s:4:"6b5e";s:51:"class/backend/mod1/class.tx_zalom_mod1_overview.php";s:4:"b6a1";s:56:"class/backend/mod1/class.tx_zalom_mod1_setupdatabase.php";s:4:"bf8e";s:21:"backend/mod1/conf.php";s:4:"2f2d";s:22:"backend/mod1/index.php";s:4:"b3cd";s:26:"backend/mod1/locallang.xml";s:4:"ebce";s:30:"backend/mod1/locallang_mod.xml";s:4:"f59b";s:27:"backend/mod1/moduleicon.gif";s:4:"f35d";s:29:"backend/css/zalom_backend.css";s:4:"53a7";s:23:"config/zalom_config.php";s:4:"164c";s:43:"resources/images/backendLoginBackground.gif";s:4:"2499";s:39:"resources/images/backendLoginHerbst.png";s:4:"e94f";s:47:"resources/images/color_ffffff_transparent50.png";s:4:"a40e";s:28:"resources/images/favicon.ico";s:4:"14ca";s:37:"resources/images/logoZALOM_136x25.png";s:4:"c425";s:44:"resources/images/logoZALOM_shadow_109x20.png";s:4:"3f2a";}',
);

?>
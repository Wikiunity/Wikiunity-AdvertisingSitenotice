<?php
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'AdvertisingSitnotice 4.3',
        'url' => 'http://wikiunity.com',
        'author' => '[http://de.community.wikiunity.com/wiki/User:McCouman <span style="color:#000;">Michael McCouman jr.</span>]',
        'description' => 'Integrates the flying banners in Wikiunity',
);

//************************WERBUNG***********************************//
//Einbindung der Werbung CSS
$wgHooks['BeforePageDisplay'][] = 'wfWerberCSS';

function wfWerberCSS() {
 global $wgOut;
 $wgOut->addHeadItem("scroller.css",'<link rel="stylesheet" type="text/css" href="/usr/wikiunity/coder/McCouman/WikiunitySpezialExtensions/WuPackAdvertising/AdvertisingSitenotice/scroller.css">');
 return true;
}
//Einbindung der Werber JS
$wgHooks['BeforePageDisplay'][] = 'wfWerberJS';

function wfWerberJS() {
 global $wgOut;
 $wgOut->addHeadItem("scroller.js",'<script type="text/javascript" src="./scroller.js"></script>');
 return true;
}

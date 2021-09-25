<?php

/*******************************/
/* Enable Federated properties */
/*******************************/
$wgWBRepoSettings['federatedPropertiesEnabled'] = true;

wfLoadExtension( 'WikibaseImport' );
wfLoadExtension( 'WikibaseLocalMedia' );

/*******************************/
/* Extension based features    */
/*******************************/

$wgEnableUploads = true;

$wgLogos = [
	'1x' => "$wgScriptPath/assets/logo/wiki.svg",
	'1.5x' => "$wgScriptPath/assets/logo/wiki.svg",
	'2x' => "$wgScriptPath/assets/logo/wiki.svg",
	'svg' =>  "$wgScriptPath/assets/logo/wiki.svg",
];

// Relative to www folder and without trailing slashes...
$wgUploadDirectory = "$IP/uploads";
$wgUploadPath = "$wgScriptPath/uploads";

// File uploads:
$wgCheckFileExtensions = false;
$wgMaxUploadSize = 106000000;

// Namespaces, e.g. for Digital Preservation or Collection Care?
// $wgExtraNamespaces = [ 'digipres' ];


/* RC Age
 https://www.mediawiki.org/wiki/Manual:
 Items in the recentchanges table are periodically purged; entries older than this many seconds will go.
 The query service (by default) loads data from recent changes
 Set this to 1 year to avoid any changes being removed from the RC table over a shorter period of time.
*/
$wgRCMaxAge = 365 * 24 * 3600;

/*******************************/
/* Enables ConfirmEdit Captcha */
/*******************************/
#wfLoadExtension( 'ConfirmEdit/QuestyCaptcha' );
#$wgCaptchaQuestions = [
#  'What animal' => 'dog',
#];

#$wgCaptchaTriggers['edit']          = true;
#$wgCaptchaTriggers['create']        = true;
#$wgCaptchaTriggers['createtalk']    = true;
#$wgCaptchaTriggers['addurl']        = true;
#$wgCaptchaTriggers['createaccount'] = true;
#$wgCaptchaTriggers['badlogin']      = true;

/*******************************/
/* Disable UI error-reporting  */
/*******************************/
#ini_set( 'display_errors', 0 );

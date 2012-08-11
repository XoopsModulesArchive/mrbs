<?php

// $Id: config.inc.php 999 2009-01-22 00:36:30Z cimorrison $

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 **************************************************************************/

include("../../mainfile.php");//xoops - blueteen
include("../../header.php");//xoops - blueteen
if( ! defined( 'XOOPS_ROOT_PATH' ) ) exit ; //xoops - cloon
$mydirname = basename( dirname( __FILE__ ) ) ; //xoops - cloon
if( ! preg_match( '/^(\D+)(\d*)$/' , $mydirname , $regs ) ) echo ( "invalid dirname: " . htmlspecialchars( $mydirname ) ) ; //xoops - cloon


// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.
//
//$timezone = "Europe/London";
if (!empty($xoopsModuleConfig['timezone'])) {
    $timezone = $xoopsModuleConfig['timezone'];
}
else {$timezone = "";}

/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL,
// "mysqli"=MySQL via the mysqli PHP extension
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP.

$db_host = XOOPS_DB_HOST;//xoops - blueteen
// Database name:
$db_database = XOOPS_DB_NAME;//xoops - blueteen
// Database login user name:
$db_login = XOOPS_DB_USER;//xoops - blueteen
// Database login password:
$db_password = XOOPS_DB_PASS;//xoops - blueteen
// Prefix for table names.  This will allow multiple installations where only
// one database is available
//$db_tbl_prefix = XOOPS_DB_PREFIX."_mrbs_";//xoops - blueteen

$db_tbl_prefix = XOOPS_DB_PREFIX."_".$mydirname."_"; // xoops - cloon

$db_users_mail  = XOOPS_DB_PREFIX . "_users";//xoops - blueteen - used to get member's email if MAIL_BOOKER is set to TRUE
// Uncomment this to NOT use PHP persistent (pooled) database connections:
// $db_nopersist = 1;
$db_nopersist = XOOPS_DB_PCONNECT; //xoops - blueteen

/*********************************
 * Site identification information
 *********************************/
//$mrbs_admin = "Admin";
$mrbs_admin = $xoopsModuleConfig['mrbs_admin'];//xoops - blueteen
//$mrbs_admin_email = "mail@domain.com";
$mrbs_admin_email = $xoopsModuleConfig['mrbs_admin_email'];//xoops - blueteen

// The company name is mandatory.   It is used in the header and also for email notifications.
// The company logo, additional information and URL are all optional.

//$mrbs_company = "Your Company";   // This line must always be uncommented ($mrbs_company is used in various places)
$mrbs_company = $xoopsModuleConfig['mrbs_company'];//xoops - blueteen

// Uncomment this next line to use a logo instead of text for your organisation in the header
//$mrbs_company_logo = "your_logo.gif";    // name of your logo file.   This example assumes it is in the MRBS directory
$mrbs_company_logo = $xoopsModuleConfig['mrbs_company_logo'];//xoops - blueteen

// Uncomment this next line for supplementary information after your company name or logo
//$mrbs_company_more_info = "You can put additional information here";  // e.g. "XYZ Department"
$mrbs_company_more_info = $xoopsModuleConfig['mrbs_company_more_info'];//xoops - blueteen

// Uncomment this next line to have a link to your organisation in the header
//$mrbs_company_url = "http://www.your_organisation.com/";
$mrbs_company_url = $xoopsModuleConfig['mrbs_company_url'];//xoops - blueteen

// This is to fix URL problems when using a proxy in the environment.
// If links inside MRBS appear broken, then specify here the URL of
// your MRBS root directory, as seen by the users. For example:
// $url_base =  "http://webtools.uab.ericsson.se/oam";
// It is also recommended that you set this if you intend to use email
// notifications, to ensure that the correct URL is displayed in the
// notification.
//$url_base = "";
$url_base = $xoopsModuleConfig['url_base'];//xoops - blueteen

$showbooker = $xoopsModuleConfig['showbooker'];//xoops - blueteen-jobrazo - show real name OR username OR both - contains : uname OR name OR both

$showpastmonth = $xoopsModuleConfig['showpastmonth'];//xoops - blueteen-jobrazo - show or hide the mincal for past month


/*******************
 * Calendar settings
 *******************/

// Note: Be careful to avoid specify options that displays blocks overlaping
// the next day, since it is not properly handled.

// This setting controls whether to use "clock" based intervals (FALSE and
// the default) or user defined periods (TRUE).  If user-defined periods
// are used then $resolution, $morningstarts, $eveningends,
// $eveningends_minutes and $twentyfourhour_format are ignored.
//$enable_periods = FALSE;
$enable_periods = $xoopsModuleConfig['enable_periods'];//xoops - blueteen

// Resolution - what blocks can be booked, in seconds.
// Default is half an hour: 1800 seconds.
//$resolution = 1800;
$resolution = $xoopsModuleConfig['resolution'];//xoops - blueteen

// Default duration - default length (in seconds) of a booking.
// Ignored if $enable_periods is TRUE
// Defaults to (60 * 60) seconds, i.e. an hour
//$default_duration = (60 * 60);
$default_duration = $xoopsModuleConfig['default_duration'];//xoops - blueteen

// Start and end of day.
// NOTE:  The time between the beginning of the last and first
// slots of the day must be an integral multiple of the resolution,
// and obviously >=0.


// The default settings below (along with the 30 minute resolution above)
// give you 24 half-hourly slots starting at 07:00, with the last slot
// being 18:30 -> 19:00

// The beginning of the first slot of the day
//$morningstarts         = 7;   // must be integer in range 0-23
$morningstarts = $xoopsModuleConfig['morningstarts'];//xoops - blueteen
//$morningstarts_minutes = 0;   // must be integer in range 0-59
$morningstarts_minutes = $xoopsModuleConfig['morningstarts_minutes'];//xoops - blueteen

// The beginning of the last slot of the day
//$eveningends           = 18;  // must be integer in range 0-23 //xoops - blueteen - beginning of the working day
$eveningends = $xoopsModuleConfig['eveningends'];//xoops - blueteen
//$eveningends_minutes   = 0;   // must be integer in range 0-59 //xoops - blueteen - end of the working day
$eveningends_minutes = $xoopsModuleConfig['eveningends_minutes'];//xoops - blueteen

// Example 1.
// If resolution=3600 (1 hour), morningstarts = 8 and morningstarts_minutes = 30 
// then for the last period to start at say 4:30pm you would need to set eveningends = 16
// and eveningends_minutes = 30

// Example 2.
// To get a full 24 hour display with 15-minute steps, set morningstarts=0; eveningends=23;
// eveningends_minutes=45; and resolution=900.



// Define the name or description for your periods in chronological order
// For example:
// $periods[] = "Period&nbsp;1"
// $periods[] = "Period&nbsp;2"
// ...
// or
// $periods[] = "09:15&nbsp;-&nbsp;09:50"
// $periods[] = "09:55&nbsp;-&nbsp;10:35"
// ...
// &nbsp; is used to ensure that the name or description is not wrapped
// when the browser determines the column widths to use in day and week
// views
//
// NOTE:  MRBS assumes that the descriptions are valid HTML and can be output
// directly without any encoding.    Please ensure that any special characters
// are encoded, eg '&' to '&amp;', '>' to '&gt;', lower case e acute to 
// '&eacute;' or '&#233;', etc.


//periods moved to line 554

// Start of week: 0 for Sunday, 1 for Monday, etc.
//$weekstarts = 1;/
$weekstarts = $xoopsModuleConfig['weekstarts'];//xoops - blueteen - week's display begins on monday


// Days of the week that should be hidden from display
// 0 for Sunday, 1 for Monday, etc.
// For example, if you want Saturdays and Sundays to be hidden set $hidden_days = array(0,6);
//
// By default the hidden days will be removed completely from the main table in the week and month
// views.   You can alternatively arrange for them to be shown as narrow, greyed-out columns
// by editing the CSS file.   Look for $column_hidden_width in mrbs.css.php.
//
// [Note that although they are hidden from display in the week and month views, they 
// can still be booked from the edit_entry form and you can display the bookings by
// jumping straight into the day view from the date selector.]
//$hidden_days = array(0,6); //hide saturday and sunday
//xoops - blueteen
//if (!empty($xoopsModuleConfig['hidden_days'])){
if (strlen($xoopsModuleConfig['hidden_days']) > 0) {
        if (eregi(',', $xoopsModuleConfig['hidden_days'])){
            $hidden_days = explode(",", $xoopsModuleConfig['hidden_days']);
        }
        else { $hidden_days = array($xoopsModuleConfig['hidden_days']); }
        }
else {$hidden_days = array();}

//if (!empty($xoopsModuleConfig['hidden_days'])){
//$hidden_days = explode(",", $xoopsModuleConfig['hidden_days']);//xoops - blueteen
//}
//else {$hidden_days = array();}



// Trailer date format: 0 to show dates as "Jul 10", 1 for "10 Jul"
//$dateformat = 1;
$dateformat = $xoopsModuleConfig['dateformat'];//xoops - blueteen

// Time format in pages. 0 to show dates in 12 hour format, 1 to show them
// in 24 hour format
//$twentyfourhour_format = 1;
$twentyfourhour_format = $xoopsModuleConfig['twentyfourhour_format'];//xoops - blueteen

/************************
 * Miscellaneous settings
 ************************/

// Maximum repeating entrys (max needed +1):
//$max_rep_entrys = 365 + 1;
$max_rep_entrys = $xoopsModuleConfig['max_rep_entrys'];//xoops - blueteen

// Default report span in days:
//$default_report_days = 60;
$default_report_days = $xoopsModuleConfig['default_report_days'];//xoops - blueteen

// Results per page for searching:
//$search["count"] = 20;
$search["count"] = $xoopsModuleConfig['searchcount'];//xoops - blueteen

// Page refresh time (in seconds). Set to 0 to disable
//$refresh_rate = 0;
$refresh_rate = $xoopsModuleConfig['refresh_rate'];//xoops - blueteen

// Trailer type.   FALSE gives a trailer complete with links to days, weeks and months before
// and after the current date.    TRUE gives a simpler trailer that just has links to the
// current day, week and month.
//$simple_trailer = FALSE;
$simple_trailer = $xoopsModuleConfig['simple_trailer'];//xoops - blueteen

// should areas be shown as a list or a drop-down select box?
//$area_list_format = "list";
//$area_list_format = "select";
$area_list_format = $xoopsModuleConfig['area_list_format'];//xoops - blueteen - display rooms in list format

// Entries in monthly view can be shown as start/end slot, brief description or
// both. Set to "description" for brief description, "slot" for time slot and
// "both" for both. Default is "both", but 6 entries per day are shown instead
// of 12.
//$monthly_view_entries_details = "both";
$monthly_view_entries_details = $xoopsModuleConfig['monthly_view_entries_det'];//xoops - blueteen

// To view weeks in the bottom (trailer.inc) as week numbers (42) instead of
// 'first day of the week' (13 Oct), set this to TRUE
//$view_week_number = FALSE;
$view_week_number = $xoopsModuleConfig['view_week_number'];//xoops - blueteen

// To display times on right side in day and week view, set to TRUE;
//$times_right_side = FALSE;
$times_right_side = $xoopsModuleConfig['times_right_side'];//xoops - blueteen

// Control the active cursor in day/week/month views.   By default, highlighting
// is implemented using the CSS :hover pseudo-class.    For old browers such as
// IE6, this is not supported and MRBS will automatically switch over to use
// JavaScript highlighting - for which there are three different modes: 'bgcolor',
// 'class' and 'hybrid'.  If clients have VERY old browsers, then you may even want
// to disable the JavaScript highlighting by setting $javascript_cursor to false.
//$javascript_cursor = TRUE; // Change to FALSE if clients have very old browsers
                           // incompatible with JavaScript.
$javascript_cursor = $xoopsModuleConfig['javascript_cursor'];//xoops - blueteen

//$show_plus_link = FALSE;   // Change to TRUE to always show the (+) link as in
                           // MRBS 1.1.
$show_plus_link = $xoopsModuleConfig['show_plus_link'];//xoops - blueteen

//$highlight_method = "hybrid"; // One of "bgcolor", "class", "hybrid".   "hybrid" is recommended as it is
                              // faster in old browsers such as IE6 - which is the only time that
                              // JavaScript highlighting is used anyway.    The rest of the time CSS
                              // highlighting is used, whether or not $javascript_cursor is set.
$highlight_method = $xoopsModuleConfig['highlight_method'];//xoops - blueteen

// Define default starting view (month, week or day)
// Default is day
//$default_view = "day";
$default_view = $xoopsModuleConfig['default_view'];//xoops - blueteen

// Define default room to start with (used by index.php)
// Room numbers can be determined by looking at the Edit or Delete URL for a
// room on the admin page.
// Default is 0
//$default_room = 0;
$default_room = $xoopsModuleConfig['default_room'];//xoops - blueteen

/***********************************************
 * Authentication settings - read AUTHENTICATION
 ***********************************************/

//xoops - blueteen - becareful with function getUserName() - created only for session_http and session_php
//$auth["session"] = "php"; // How to get and keep the user ID. One of
           // "http" "php" "cookie" "ip" "host" "nt" "omni"
           // "remote_user"
$auth["session"] = $xoopsModuleConfig['session'];//xoops - blueteen

$auth["type"] = "xoops"; // How to validate the user/password. One of "none"
                          // "config" "db" "db_ext" "pop3" "imap" "ldap" "nis"
                          // "nw" "ext".
// NOTE:  if you are using the "db" authentication scheme, then make sure you keep the admin user
// "administrator" below.    The system initially relies on there being an admin called "administrator".
// Once you have set up the user list and created one or more other admins (by adding them both to the
// user list and the config file), then you can delete or rename the "administrator" user.

// Configuration parameters for 'cookie' session scheme

// The encryption secret key for the session tokens. You are strongly
// advised to change this if you use this session scheme
$auth["session_cookie"]["secret"] = "This isn't a very good secret!";
// The expiry time of a session, in seconds
$auth["session_cookie"]["session_expire_time"] = (60*60*24*30); // 30 days
// Whether to include the user's IP address in their session cookie.
// Increases security, but could cause problems with proxies/dynamic IP
// machines
$auth["session_cookie"]["include_ip"] = TRUE;


// Cookie path override. If this value is set it will be used by the
// 'php' and 'cookie' session schemes to override the default behaviour
// of automatically determining the cookie path to use
$cookie_path_override = '';
//xoops - blueteen - comment out default admin and user
// The list of administrators (can modify other peoples settings)
//$auth["admin"][] = "127.0.0.1";   // localhost IP address. Useful with IP sessions.
//$auth["admin"][] = "administrator"; // A user name from the user list. Useful
                                    // with most other session schemes.
//$auth["admin"][] = "10.0.0.1";
//$auth["admin"][] = "10.0.0.2";
//$auth["admin"][] = "10.0.0.3";

// 'auth_config' user database
// Format: $auth["user"]["name"] = "password";
//$auth["user"]["administrator"] = "secret";
//$auth["user"]["alice"] = "a";
//$auth["user"]["bob"] = "b";

// 'session_http' configuration settings
$auth["realm"]  = "mrbs";

// 'session_remote_user' configuration settings
//$auth['remote_user']['logout_link'] = '/logout/link.html';

// 'auth_ext' configuration settings
$auth["prog"]   = "";
$auth["params"] = "";

// 'auth_db_ext' configuration settings
// The 'db_system' variable is equivalent to the core MRBS $dbsys variable,
// and allows you to use any of MRBS's database abstraction layers for
// db_ext authentication.
$auth['db_ext']['db_system'] = 'mysql';
$auth['db_ext']['db_host'] = 'localhost';
$auth['db_ext']['db_username'] = 'authuser';
$auth['db_ext']['db_password'] = 'authpass';
$auth['db_ext']['db_name'] = 'authdb';
$auth['db_ext']['db_table'] = 'users';
$auth['db_ext']['column_name_username'] = 'name';
$auth['db_ext']['column_name_password'] = 'password';
// Either 'md5', 'sha1', 'crypt' or 'plaintext'
$auth['db_ext']['password_format'] = 'md5';

// 'auth_ldap' configuration settings
// Where is the LDAP server
//$ldap_host = "localhost";
// If you have a non-standard LDAP port, you can define it here
//$ldap_port = 389;
// If you do not want to use LDAP v3, change the following to false
$ldap_v3 = false;//xoops - blueteen
// If you want to use TLS, change the following to true
$ldap_tls = false;
// LDAP base distinguish name
// See AUTHENTICATION for details of how check against multiple base dn's
//$ldap_base_dn = "ou=organizationalunit,dc=my-domain,dc=com";
// Attribute within the base dn that contains the username
//$ldap_user_attrib = "uid";
// If you need to search the directory to find the user's DN to bind
// with, set the following to the attribute that holds the user's
// "username". In Microsoft AD directories this is "sAMAccountName"
//$ldap_dn_search_attrib = "sAMAccountName";
// If you need to bind as a particular user to do the search described
// above, specify the DN and password in the variables below
// $ldap_dn_search_dn = "cn=Search User,ou=Users,dc=some,dc=company";
// $ldap_dn_search_password = "some-password";

// 'auth_ldap' extra configuration for ldap configuration of who can use
// the system
// If it's set, the $ldap_filter will be combined with the value of
// $ldap_user_attrib like this:
//   (&($ldap_user_attrib=username)($ldap_filter))
// After binding to check the password, this check is used to see that
// they are a valid user of mrbs.
//$ldap_filter = "mrbsuser=y";

// 'auth_imap' configuration settings
// See AUTHENTICATION for details of how check against multiple servers
// Where is the IMAP server
$imap_host = "imap-server-name";
// The IMAP server port
$imap_port = "143";

// 'auth_imap_php' configuration settings
$auth["imap_php"]["hostname"] = "localhost";
// You can also specify any of the following options:
// Specifies the port number to connect to
//$auth["imap_php"]["port"] = 993;
// Use SSL
//$auth["imap_php"]["ssl"] = TRUE;
// Use TLS
//$auth["imap_php"]["tls"] = TRUE;
// Turn off SSL/TLS certificate validation
//$auth["imap_php"]["novalidate-cert"] = TRUE;

// 'auth_pop3' configuration settings
// See AUTHENTICATION for details of how check against multiple servers
// Where is the POP3 server
$pop3_host = "pop3-server-name";
// The POP3 server port
$pop3_port = "110";


/**********************************************
 * Email settings
 **********************************************/

// You can override the charset used in emails if $unicode_encoding is 1
// (utf-8) if you like, but be sure the charset you choose can handle all
// the characters in the translation and that anyone may use in a
// booking description
//$mail_charset = "iso-8859-1";

// xoops - blueteen
if ($xoopsModuleConfig['unicode_encoding'] == 1 && !empty($xoopsModuleConfig['mail_charset'])) {
$mail_charset = $xoopsModuleConfig['mail_charset'];
}

// Set to TRUE if you want to be notified when entries are booked. Default is
// FALSE
//define("MAIL_ADMIN_ON_BOOKINGS", TRUE);
define("MAIL_ADMIN_ON_BOOKINGS", $xoopsModuleConfig['mail_admin_on_bookings']);//xoops - blueteen

// Set to TRUE if you want AREA ADMIN to be notified when entries are booked.
// Default is FALSE. Area admin emails are set in room_area admin page.
//define("MAIL_AREA_ADMIN_ON_BOOKINGS", FALSE);
define("MAIL_AREA_ADMIN_ON_BOOKINGS", $xoopsModuleConfig['mail_area_admin_on_book']);//xoops - blueteen

// Set to TRUE if you want ROOM ADMIN to be notified when entries are booked.
// Default is FALSE. Room admin emails are set in room_area admin page.
//define("MAIL_ROOM_ADMIN_ON_BOOKINGS", FALSE);
define("MAIL_ROOM_ADMIN_ON_BOOKINGS", $xoopsModuleConfig['mail_room_admin_on_book']);//xoops - blueteen

// Set to TRUE if you want ADMIN to be notified when entries are deleted. Email
// will be sent to mrbs admin, area admin and room admin as per above settings,
// as well as to booker if MAIL_BOOKER is TRUE (see below).
//define("MAIL_ADMIN_ON_DELETE", TRUE);
define("MAIL_ADMIN_ON_DELETE", $xoopsModuleConfig['mail_admin_on_delete']);//xoops - blueteen

// Set to TRUE if you want to be notified on every change (i.e, on new entries)
// but also each time they are edited. Default is FALSE (only new entries)
//define("MAIL_ADMIN_ALL", TRUE);
define("MAIL_ADMIN_ALL", $xoopsModuleConfig['mail_admin_all']);//xoops - blueteen

// Set to TRUE is you want to show entry details in email, otherwise only a
// link to view_entry is provided. Irrelevant for deleted entries. Default is
// FALSE.
//define("MAIL_DETAILS", TRUE);
define("MAIL_DETAILS", $xoopsModuleConfig['mail_details']);//xoops - blueteen

// Set to TRUE if you want BOOKER to receive a copy of his entries as well any
// changes (depends of MAIL_ADMIN_ALL, see below). Default is FALSE. To know
// how to set mrbs to send emails to users/bookers, see INSTALL.
//define("MAIL_BOOKER", TRUE);
define("MAIL_BOOKER", $xoopsModuleConfig['mail_booker']);//xoops - blueteen

// If MAIL_BOOKER is set to TRUE (see above) and you use an authentication
// scheme other than 'auth_db', you need to provide the mail domain that will
// be appended to the username to produce a valid email address (ie.
// "@domain.com").
define("MAIL_DOMAIN", '');//xoops - blueteen - not used

// If you use MAIL_DOMAIN above and username returned by mrbs contains extra
// strings appended like domain name ('username.domain'), you need to provide
// this extra string here so that it will be removed from the username.
define("MAIL_USERNAME_SUFFIX", '');//xoops - blueteen - not used

// Set the name of the Backend used to transport your mails. Either "mail",
// "smtp" or "sendmail". Default is 'mail'. See INSTALL for more details.
//define("MAIL_ADMIN_BACKEND", "mail");
define("MAIL_ADMIN_BACKEND", $xoopsModuleConfig['mail_admin_backend']);//xoops - blueteen

/*******************
 * Sendmail settings
 */

// Set the path of the Sendmail program (only used with "sendmail" backend).
// Default is "/usr/bin/sendmail"
//define("SENDMAIL_PATH", "/usr/bin/sendmail");
define("SENDMAIL_PATH", $xoopsModuleConfig['sendmail_path']);//xoops - blueteen

// Set additional Sendmail parameters (only used with "sendmail" backend).
// (example "-t -i"). Default is ""
//define("SENDMAIL_ARGS", '');
define("SENDMAIL_ARGS", $xoopsModuleConfig['sendmail_args']);//xoops - blueteen

/*******************
 * SMTP settings
 */

// Set smtp server to connect. Default is 'localhost' (only used with "smtp"
// backend).
//define("SMTP_HOST", "smtp.free.fr");
define("SMTP_HOST", $xoopsModuleConfig['smtp_host']);//xoops - blueteen

// Set smtp port to connect. Default is '25' (only used with "smtp" backend).
//define("SMTP_PORT", 25);
define("SMTP_PORT", $xoopsModuleConfig['smtp_port']);//xoops - blueteen

// Set whether or not to use SMTP authentication. Default is 'FALSE'
//define("SMTP_AUTH", FALSE);
define("SMTP_AUTH", $xoopsModuleConfig['smtp_auth']);//xoops - blueteen

// Set the username to use for SMTP authentication. Default is ""
//define("SMTP_USERNAME", '');
define("SMTP_USERNAME", $xoopsModuleConfig['smtp_username']);//xoops - blueteen

// Set the password to use for SMTP authentication. Default is ""
//define("SMTP_PASSWORD", '');
define("SMTP_PASSWORD", $xoopsModuleConfig['smtp_password']);//xoops - blueteen

/**********************
 * Miscellaneous settings
 */

// Set the language used for emails (choose an available lang.* file).
// Default is 'en'.
//define("MAIL_ADMIN_LANG", 'en');
define("MAIL_ADMIN_LANG", $xoopsModuleConfig['mail_admin_lang']);//xoops - blueteen

// Set the email address of the From field. Default is $mrbs_admin_email
//define("MAIL_FROM", $mrbs_admin_email);
if (empty($xoopsModuleConfig['mail_from'])) {
define("MAIL_FROM", $mrbs_admin_email);
}
else {
	 define("MAIL_FROM", $xoopsModuleConfig['mail_from']);//xoops - blueteen
	 }

// Set the recipient email. Default is $mrbs_admin_email. You can define
// more than one recipient like this "john@doe.com,scott@tiger.com"
//define("MAIL_RECIPIENTS", $mrbs_admin_email);
if (empty($xoopsModuleConfig['mail_recipients'])) {
define("MAIL_RECIPIENTS", $mrbs_admin_email);
}
else {
	 define("MAIL_RECIPIENTS", $xoopsModuleConfig['mail_recipients']);//xoops - blueteen
	 }

// Set email address of the Carbon Copy field. Default is ''. You can define
// more than one recipient (see MAIL_RECIPIENTS)
//define("MAIL_CC", '');
define("MAIL_CC", $xoopsModuleConfig['mail_cc']);//xoops - blueteen


/**********
 * Language
 *&********/

//$unicode_encoding = 1;
$unicode_encoding = $xoopsModuleConfig['unicode_encoding'];//xoops - blueteen

// Set this to a different language specifier to default to different
// language tokens. This must equate to a lang.* file in MRBS.
// e.g. use "fr" to use the translations in "lang.fr" as the default
// translations
//$default_language_tokens = "en";
$default_language_tokens = $xoopsModuleConfig['default_language_tokens'];//xoops - blueteen

// Set this to 1 to disable the automatic language changing MRBS performs
// based on the user's browser language settings. It will ensure that
// the language displayed is always the value of $default_language_tokens,
// as specified above
//$disable_automatic_language_changing = 0;
$disable_automatic_language_changing = $xoopsModuleConfig['disable_automatic_lang'];//xoops - blueteen

// Set this to a valid locale (for the OS you run the MRBS server on)
// if you want to override the automatic locale determination MRBS
// performs
$override_locale = "";

// faq file language selection. IF not set, use the default english file.
// IF your language faq file is available, set $faqfilelang to match the
// end of the file name, including the underscore (ie. for site_faq_fr.html
// use "_fr"
//$faqfilelang = "_fr";
$faqfilelang = $xoopsModuleConfig['faqfilelang'];//xoops - blueteen - site_faq.html rename to site_faq_en.html

// This next require must be done after the definitions above, as the definitions
// are used in the included file

include "language.php";

//xoops - blueteen - moved from line 161

/*************
 * Periods
 *************/

// Example 1.
// If resolution=3600 (1 hour), morningstarts = 8 and morningstarts_minutes = 30
// then for the last period to start at say 4:30pm you would need to set eveningends = 16
// and eveningends_minutes = 30

// Example 2.
// To get a full 24 hour display with 15-minute steps, set morningstarts=0; eveningends=23;
// eveningends_minutes=45; and resolution=900.

// Define the name or description for your periods in chronological order
// For example:
// $periods[] = "Period&nbsp;1"
// $periods[] = "Period&nbsp;2"
// ...
// or
// $periods[] = "09:15&nbsp;-&nbsp;09:50"
// $periods[] = "09:55&nbsp;-&nbsp;10:35"
// ...
// &nbsp; is used to ensure that the name or description is not wrapped
// when the browser determines the column widths to use in day and week
// views
//
// NOTE:  MRBS assumes that the descriptions are valid HTML and can be output
// directly without any encoding.    Please ensure that any special characters
// are encoded, eg '&' to '&amp;', '>' to '&gt;', lower case e acute to
// '&eacute;' or '&#233;', etc.

// NOTE:  The maximum number of periods is 60.   Do not define more than this.
//$periods[] = "Period&nbsp;1";
//$periods[] = "Period&nbsp;2";
// NOTE:  The maximum number of periods is 60.   Do not define more than this.

// Do some checking
if ($enable_periods)
{
  $periodarray = explode(",",$xoopsModuleConfig['periods']);//xoops - blueteen-jobrazo
  if (count($periodarray) > 60)
  {
    die('Configuration error: too many periods defined');
  }
  /*xoops - blueteen-jobrazo begin*/
    foreach ($periodarray as $value) {
            $periods[] = get_vocab($value);
    }//end foreach

  /*xoops - blueteen-jobrazo end*/
}
else
{
  $start_first_slot = ($morningstarts*60) + $morningstarts_minutes;   // minutes
  $start_last_slot  = ($eveningends*60) + $eveningends_minutes;       // minutes
  $start_difference = ($start_last_slot - $start_first_slot) * 60;    // seconds
  if (($start_difference < 0) or ($start_difference%$resolution != 0))
  {
    die('Configuration error: start and end of day incorrectly defined');
  }
}

//xoops limit booking in time
$use_limit_time_booking = $xoopsModuleConfig['use_limit_time_booking'];//xoops
$time_booking = $xoopsModuleConfig['time_booking'];//xoops



/*************
 * Entry Types
 *************/

// This array maps entry type codes (letters A through J) into descriptions.
// Each type has a color (see TD.x classes in the style sheet mrbs.css.php).
// The value for each type is a short (one word is best) description of the
// type. The values must be escaped for HTML output ("R&amp;D").
// Please leave I and E alone for compatibility.
// If a type's entry is unset or empty, that type is not defined; it will not
// be shown in the day view color-key, and not offered in the type selector
// for new or edited entries.

// $typel["A"] = "A";
// $typel["B"] = "B";
// $typel["C"] = "C";
// $typel["D"] = "D";
$typel["E"] = get_vocab("external");
// $typel["F"] = "F";
// $typel["G"] = "G";
// $typel["H"] = "H";
$typel["I"] = get_vocab("internal");
// $typel["J"] = "J";

//xoops - blueteen
$permitted_entry_types = array("A", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
$entry_types = explode(",",$xoopsModuleConfig['entry_types']);
foreach ($entry_types as $value) {
	if (in_array($value, $permitted_entry_types)) {
		$typel[$value] = get_vocab($value);
	}//endif
}//end foreach


/********************************************************
 * PHP System Configuration - internal use, do not change
 ********************************************************/

// Disable magic quoting on database returns:
// set_magic_quotes_runtime(0);

// Make sure notice errors are not reported, they can break mrbs code:
error_reporting (E_ALL ^ E_NOTICE);

// These variables specify the names of the tables in the database
// These should not need to be changed.  Please change $db_tbl_prefix
// in the database section above.
$tbl_area   = $db_tbl_prefix . "area";
$tbl_entry  = $db_tbl_prefix . "entry";
$tbl_repeat = $db_tbl_prefix . "repeat";
$tbl_room   = $db_tbl_prefix . "room";
$tbl_users  = $db_tbl_prefix . "users";

//if ($area == 1) {
//echo $area. " area";
//}

?>

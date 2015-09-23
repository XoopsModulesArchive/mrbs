<?php

$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PREFERENCES","Preferences");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PERMISSION","Permissions");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_DESC_PERMISSION","Anonymous can only have view rights");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_INDEX","Home");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ABOUT","About");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HOW_TO","How to");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ROOMS_AREAS","Manage Rooms");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HELP","Help");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_UPDATES","Updates");

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_BOOKING','View details page');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_CREATE_BOOKING','Create a booking');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MODIFY_BOOKING','Manage bookings');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FULL_ADMIN','Full admin');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN','Admin name');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL','Admin email');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY','Your company name');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO','Company logo');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO_DESC','Name of your logo file<br />
This file must be located in the MRBS directory<br />
To use a logo instead of text for your organisation in the header<br />
Leave empty to hide the logo
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO','More info about your Company');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO_DESC','For supplementary information about your company name or logo.<br />
Leave empty to hide these info');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL','Company url');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL_DESC','To have a link to your organisation in the header.<br />
Leave empty for no link.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE','Url base');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE_DESC','This is to fix URL problems when using a proxy in the environment.<br />
If links inside MRBS appear broken, then specify here the URL of your MRBS root directory.<br />
It is also recommended that you set this if you intend to use email notifications, to ensure that the correct URL is displayed in the notification.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER','Showbooker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_DESC','Show real name OR username OR both OR NONE (except for admin).<br />
On the report webpage or booking\'s details webpage.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_UNAME','uname');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NAME','name');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_BOTH','both');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NONE','none');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH','Show mincal past month');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH_DESC','Show or hide the mincal for the past month.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS','Periods');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_DESC','This setting controls whether to use "clock" based intervals (disable)<br /> or user defined periods (enable).<br />
If user-defined periods are used then Resolution, First slot of the day (hours and minutes), Last slot of the day (hours and minutes) and Time format in pages are ignored.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_TRUE','Enable periods');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_FALSE','Disable periods');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION','Resolution');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION_DESC','What blocks can be booked, in seconds.<br />
1800 sec = 30 min');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION','Default duration');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION_DESC','Default duration (in seconds) of a booking.<br />
Ignored if periods are disable. Default to 3600 seconds, i.e. an hour.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS','First slot of the day : hour');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_DESC','Must be integer in range 0-23');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES','First slot of the day : minutes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES_DESC','Must be integer in range 0-59');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS','Last slot of the day : hour');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_DESC','Must be integer in range 0-23');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES','Last slot of the day : minutes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES_DESC','Must be integer in range 0-59');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS','Hidden days');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS_DESC','Days of the week that should be hidden from display (comma separated)<br />
0 for Sunday, 1 for Monday, etc.<br />
For example, if you want Saturdays and Sundays to be hidden set <b>0,6</b><br />
By default the hidden days will be removed completely from the main table in the week and month views.<br />
You can alternatively arrange for them to be shown as narrow, greyed-out columns by editing the CSS file.<br />
Look for $column_hidden_width in mrbs.css.php.<br />
Note that although they are hidden from display in the week and month views,<br />
they can still be booked from the edit_entry form<br />
and you can display the bookings by jumping straight into the day view from the date selector.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT','Trailer date format');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_DESC','To show dates as "Jul 10" or "10 Jul".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_0','Ex: Jul 10');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_1','Ex: 10 Jul');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT','Time format in pages');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_DESC','12H format or 24H format.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_0','12H');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_1','24H');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS','Maximum repeating entries');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS_DESC','Max needed +1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS','Default report span in days');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT','Results per page for searching');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE','Page refresh time (in seconds)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE_DESC','Set to 0 to disable.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER','Trailer type');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_DESC','Complete trailer with links to days, weeks and months before and after the current date.<br />
Or simpler trailer that just has links to the current day, week and month.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_TRUE','Simple trailer');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_FALSE','Complete trailer');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT','Area list format');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_DESC','Should areas be shown as a list or a drop-down select box.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_LIST','List');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_SELECT','Dropdown select box');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS','Monthly view entries details');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_DESC','Entries in monthly view can be shown as start/end slot, brief description or both.<br />
Set to "description" for brief description, "slot" for time slot and "both" for both.<br />
Default is "both", but 6 entries per day are shown instead of 12.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_D','Description');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_S','Slot');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_B','Both');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER','Week number');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_DESC','To view weeks in the bottom (trailer.inc) as week numbers (42) instead of "first day of the week" (13 Oct), set this to "Show weeknumber".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_TRUE','Show weeknumber');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_FALSE','Hide week number');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE','Time right side');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_DESC','To display times on right side in day and week view, set to "Show time right side".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_TRUE','Show time right side');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_FALSE','Hide time right side');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR','Javascript cursor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_DESC','Control the active cursor in day/week/month views.<br />
By default, highlighting is implemented using the CSS :hover pseudo-class.<br />
For old browers such as IE6, this is not supported and MRBS will automatically switch over to use JavaScript highlighting.<br />
For which there are three different modes: "bgcolor","class" and "hybrid" (See next parameter).<br />
If clients have VERY old browsers, then you may even want to disable the JavaScript highlighting.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_TRUE','Enable javascript cursor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_FALSE','Disable javascript cursor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD','Highlight method');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_DESC','"Hybrid" is recommended as it is faster in old browsers such as IE6<br />
Which is the only time that JavaScript highlighting is used anyway.<br />
The rest of the time CSS highlighting is used, whether or not "javascript cursor" is enable.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_HYBRID','Hybrid');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_CLASS','Class');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_BGCOLOR','Bgcolor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK','(+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_DESC','To always show the (+) link as in MRBS 1.1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_TRUE','Show (+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_FALSE','Hide (+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW','Default starting view');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DESC','Month, week or day');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DAY','Day');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_WEEK','Week');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_MONTH','Month');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM','Default room');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM_DESC','Define default room to start with (used by index.php)<br />
Room numbers can be determined by looking at the Edit or Delete URL for a room on the admin page.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION','Authentication method');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_DESC','How to get and keep the user ID.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_PHP','php');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_HTTP','http');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS','Mail admin on bookings');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_DESC','Set to YES if you want to be notified when entries are booked');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS','Mail area admin on bookings');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_DESC','Set to YES if you want AREA ADMIN to be notified when entries are booked.<br />
Area admin emails are set in room_area admin page.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS','Mail room admin on bookings');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_DESC','Set to YES if you want ROOM ADMIN to be notified when entries are booked.<br />
Room admin emails are set in room_area admin page.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE','Mail admin on delete');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_DESC','Set to YES if you want ADMIN to be notified when entries are deleted.<br />
Email will be sent to mrbs admin, area admin and room admin as per above settings, as well as to booker if Mail Booker is enable (see below).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL','Mail admin all');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_DESC','Set to YES if you want to be notified on every change (i.e, on new entries)<br />
But also each time they are edited. Default is NO (only new entries)
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS','Mail details');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_DESC','Set to YES is you want to show entry details in email, otherwise only a link to view_entry is provided.<br />
Irrelevant for deleted entries.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER','Mail booker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_DESC','Set to YES if you want BOOKER to receive a copy of his entries as well any changes.<br />
Depends of MAIL_ADMIN_ALL, see below.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND','Mail admin backend');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_DESC','Set the name of the Backend used to transport your mails.<br />
Either "mail","smtp" or "sendmail".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_MAIL','mail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SMTP','smtp');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SENDMAIL','Sendmail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH','Sendmail path');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH_DESC','Set the path of the Sendmail program (only used with "sendmail" backend).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS','Sendmail arguments');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS_DESC','Set additional Sendmail parameters (only used with "sendmail" backend).<br />
Example : -t -i
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST','Smtp host');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST_DESC','Set smtp server to connect.<br />
Only used with "smtp" backend.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT','Smtp port');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT_DESC','Set smtp port to connect.<br />
Only used with "smtp" backend.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH','Smtp auth');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_DESC','Set whether or not to use SMTP authentication.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME','Smtp username');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME_DESC','Set the username to use for SMTP authentication.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD','Smtp password');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD_DESC','Set the password to use for SMTP authentication.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG','Admin language');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG_DESC','Set the language used for emails (choose an available lang.* file).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM','Mail from');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM_DESC','Set the email address of the From field.<br />
If empty, Admin email will be used.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS','Mail recipients');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS_DESC','Set the recipient email.<br />
You can define more than one recipient like this "john@doe.com,scott@tiger.com".<br />
If empty, Admin email will be used.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC','Carbon copy mail recipients');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC_DESC','Set email address of the Carbon Copy field.<br />
You can define more than one recipient like this "john@doe.com,scott@tiger.com".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING','Unicode encoding');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_DESC','Default use UTF-8 in all pages and in the database<br />
Otherwise text gets entered in the database in different encodings, dependent on the users "language"');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_0','Do not use UTF-8');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_1','Use UTF-8');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS','Default language tokens');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS_DESC','Set this to a different language specifier to default to different language tokens.<br />
The lang.* file must be present in MRBS folder.<br />
You must update the module when adding new language.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE','Automatic language changing');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_DESC',"Enable (or disable) the automatic language changing MRBS performs based on the user's browser language settings.<br />
If 'disable', it will ensure that the language displayed is always the value of Default language tokens, as specified above.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_0','Enable');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_1','Disable');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG','FAQ file language');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG_DESC',"If your language FAQ file is available, choose it in the select menu.<br />
Language file faq are in the MRBS folder.<br />
You must update the module when adding new faq language.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME','Theme');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME_DESC','Choose your theme in the select menu<br />
Themes files are located in the "Themes" folder.<br />
You must update the module when adding new theme.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES','Entry types');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES_DESC','Create your own entry types.<br />
Use A to Z (except E and I wich are created by default).<br />
Separate entry types with a comma<br />
Edit lang.* in "mrbs" folder to change text (near line 260).<br />
Edit *.inc files (near line 71) in "Themes" folder to change cells color.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING','Month cell scrolling');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_DESC','Set to YES if you want the cells in the month view to scroll if there are too many bookings to display.<br />
Set to NO if you want the table cell to expand to accommodate the bookings.<br />
NOTE 1 : Scrolling doesn\'t work in IE6 and so the table cell will always expand in IE6.<br />
NOTE 2 : In IE8 Beta 2 scrolling doesn\'t work either and the cell content is clipped when Month cell scrolling is set to YES.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS','Periods');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS_DESC','Create your own periods.<br />
Separate entry types with a comma<br />
Edit lang.* in "mrbs" folder to change text or add periods definition (near line 291).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS','Week starts');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_DESC','Start of week: 0 for Sunday, 1 for Monday, etc.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE','Time zone');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE_DESC','The timezone your meeting rooms run in.<br />
It is especially important to set this if you are using PHP 5 on Linux.<br />
In this configuration if you don\'t, meetings in a different DST than you are currently in are offset by the DST offset incorrectly.<br />
When upgrading an existing installation, this should be set to the timezone the web server runs in (Eg : Europe/London).<br />
<a href="http://fr.php.net/timezones">List of Supported Timezones</a>
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_0','Sunday');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_1','Monday');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_2','Tuesday');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_3','Wednesday');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_4','Thursday');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_5','Friday');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_6','Saturday');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET','Mail charset');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET_DESC','You can override the charset used in emails if Unicode encoding is utf-8 if you like, but be sure the charset you choose can handle all the characters in the translation and that anyone may use in a booking description.<br />
set to : iso-8859-1 for example.
');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING','Limit booking ahead');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_DESC','Use a limit on number of days ahead one can make a booking. Does not apply to full admins');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING','Number of days ahead a booking can be made');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING_DESC','Limit booking ahead must be set to yes');

?>
<?php
/**
* $Id: $
* Module: MRBS
* Author: jobrazo
* Licence: GNU
*/
$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ABOUT","About");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_PREFERENCES","Preferences");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ACCESSMODULE","Go to module");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_MODULE_ADMIN_TITLE","MRBS Administration");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ROOMS_AREAS","Manage Rooms & Areas");

//ModuleAdmin
define('_AM_MODULEADMIN_MISSING','Error: The ModuleAdmin class is missing. Please install the ModuleAdmin Class into /Frameworks (see /docs/readme.txt)');

// Text for Admin footer
define("_AM_ADMIN_FOOTER","<div class='center smallsmall italic pad5'>MRBS is maintained by the <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");
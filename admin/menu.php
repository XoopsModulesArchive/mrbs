<?php
/**
 * Private message
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         MRBS
 * @since           1.41
 * @author          jobrazo
 * @version         $Id: menu.php $
 */

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

$dirname = basename(dirname(dirname(__FILE__)));
$GLOBALS["MRBS_PREFIX"] = strtoupper($dirname);

$module_handler = xoops_gethandler('module');
$module = $module_handler->getByDirname($dirname);
$pathIcon32 = $module->getInfo('icons32');

//xoops_loadLanguage('admin', $dirname);

$adminmenu = array();

$i = 1;
$adminmenu[$i]["title"] = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_INDEX');
$adminmenu[$i]["link"] = 'admin/index.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/home.png';

$i++;
$adminmenu[$i]["title"] = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_ROOMS_AREAS');
$adminmenu[$i]["link"] = 'admin.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/administration.png';

$i++;
$adminmenu[$i]["title"] = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_PERMISSION');
$adminmenu[$i]["link"] = 'admin/groupperm.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/permissions.png';

$i++;
$adminmenu[$i]["title"] = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_HOW_TO');
$adminmenu[$i]["link"] = 'admin/how_to.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/about.png';

$i++;
$adminmenu[$i]["title"] = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_UPDATES');
$adminmenu[$i]["link"] = 'admin/updates.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/update.png';

$i++;
$adminmenu[$i]["title"] = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_ABOUT');
$adminmenu[$i]["link"] = 'admin/about.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/about.png';
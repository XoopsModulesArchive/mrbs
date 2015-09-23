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
 * @version         $Id: updates.php $
 */
include 'admin_header.php';
xoops_cp_header();

//include "../config.inc.php";
include '../version.inc';

$mrbs_installed_version = $xoopsModule->getVar('version');

echo "Xoops module version <b>" .$mrbs_installed_version. ".02</b> Based on Sourceforge version <b>" . get_mrbs_version() . "</b><br/>\n";

echo "<iframe src=http://users.fulladsl.be/spb19588/mrbs_update_page_141_02.html width='100%' height='550' frameborder='0' scrolling='yes'></iframe>";

//echo "<br/><br/> Check <a href=http://users.fulladsl.be/spb19588/mrbs_update_page.html>here</a> for updates / patches and other news about this module.";
include "admin_footer.php";
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
 * @version         $Id: readme.php $
 */
include 'admin_header.php';
xoops_cp_header();
$howtofile = 'how_to_'.$xoopsModuleConfig['default_language_tokens'].'.html';
if ( file_exists($howtofile) ) 
    { 
    include $howtofile;	 
    } 
    else 
    { 
    include 'how_to_en.html';
    } 
//echo $xoopsModuleConfig['default_language_tokens'];
include "admin_footer.php";
//xoops_cp_footer();
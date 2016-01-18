<?php
global $xoopsModule;
include '../../../include/cp_header.php';
include_once XOOPS_ROOT_PATH .'/class/xoopsform/grouppermform.php';
include 'admin_header.php';
xoops_cp_header();

$mydirname = basename(dirname(dirname( __FILE__ )));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

$perm_name = $GLOBALS["MRBS_PREFIX"].'_perms';

if ($xoopsUser)  $groups = $xoopsUser->getGroups();
else $groups = XOOPS_GROUP_ANONYMOUS;

$module_id = $xoopsModule->getVar("mid");
$gperm_handler = & xoops_gethandler('groupperm');

define('PERM_VIEW_MRBS', 	1);
define('PERM_CREATE_MRBS', 	2);
define('PERM_MODIFY_MRBS', 	3);
define('PERM_FULL_MRBS', 	4);

$view_booking = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_BOOKING');
$create_booking = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_CREATE_BOOKING');
$modify_booking = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MODIFY_BOOKING');
$full_admin = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FULL_ADMIN');

$cats = array(  '1' => $view_booking,
				'2' => $create_booking, 
				'3' => $modify_booking, 
				'4' => $full_admin);


$title_of_form = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_PERMISSION');
$perm_desc = constant('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MENU_DESC_PERMISSION');

$form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);
foreach ($cats as $item_id => $item_name) {
	$form->addItem($item_id, $item_name);
}

echo $form->render();
unset ($form);

include "admin_footer.php";
//xoops_cp_footer();
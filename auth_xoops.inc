<?php
//xoops - blueteen
# Always validates
function authValidateUser($user, $pass)
{
    return 1;
}

function authGetUserLevel($user, $lev1_admin)
{
	global $xoopsUser, $xoopsModule, $xoopsDB, $mydirname;

	// User not logged in, user level '0'
	if(!$xoopsUser){
	$perm_name = $GLOBALS["MRBS_PREFIX"].'_perms';
	$gperm_groupid = 3;
	$gperm_itemid = "1";
	$gperm_modid=$xoopsModule->mid();
    $gperm_handler =&xoops_gethandler('groupperm');
	$CR=$gperm_handler->checkRight($gperm_name, $gperm_itemid, $gperm_groupid, $gperm_modid);
	   if($CR) {
	return 1;
	}
	else
	{
	return 0;
	}
}
	$groups_id_arr =& $xoopsUser->getGroups();
	$perm_name = $GLOBALS["MRBS_PREFIX"].'_perms';
	$gperm_modid=$xoopsModule->mid();
    $gperm_handler =&xoops_gethandler('groupperm');

foreach($groups_id_arr as $gperm_groupid){
   $gperm_itemid = "4";
   $CR=$gperm_handler->checkRight($gperm_name, $gperm_itemid, $gperm_groupid, $gperm_modid);
   if($CR) {
   return 4;
   }
}	
foreach($groups_id_arr as $gperm_groupid){
   $gperm_itemid = "3";
   $CR=$gperm_handler->checkRight($gperm_name, $gperm_itemid, $gperm_groupid, $gperm_modid);
   if($CR) {
   return 3;
   }
}

foreach($groups_id_arr as $gperm_groupid){
   $gperm_itemid = "2";
   $CR=$gperm_handler->checkRight($gperm_name, $gperm_itemid, $gperm_groupid, $gperm_modid);
   if($CR) {
   return 2;
   }
}

foreach($groups_id_arr as $gperm_groupid){
   $gperm_itemid = "1";
   $CR=$gperm_handler->checkRight($gperm_name, $gperm_itemid, $gperm_groupid, $gperm_modid);
   if($CR) {
   return 1;
   }
}

	$xoopsModule = XoopsModule::getByDirname($mydirname);
	if ( $xoopsUser->isAdmin($xoopsModule->mid()) ) { 
	return 4;
	}
  	
	// Everybody else is access level '0'
	return 0;
	


		
	
	
}

?>
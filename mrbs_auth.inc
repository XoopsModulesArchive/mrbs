<?php
// $Id: mrbs_auth.inc 925 2008-09-25 22:47:15Z cimorrison $

// include the authentification wrappers
include "auth_$auth[type].inc";
if (isset($auth['session']))
{
  include "session_$auth[session].inc";
}

/* getAuthorised($user, $pass, $level)
 * 
 * Check to see if the user name/password is valid
 * 
 * $user  - The user name
 * $pass  - The users password
 * $level - The access level required
 * 
 * Returns:
 *   0        - The user does not have the required access
 *   non-zero - The user has the required access
 */
//xoops - blueteen - begin change function getAuthorised
function getAuthorised($level)
{
    global $auth;
    $user = getUserName();
	if(!authValidateUser($user, $pass))
		{return 0;}

    return authGetUserLevel($user, $auth["admin"]) >= $level;
}
//xoops - blueteen - end change to function getAuthorised



/* getWritable($creator, $user)
 * 
 * Determines if a user is able to modify an entry
 *
 * $creator - The creator of the entry
 * $user    - Who wants to modify it
 *
 * Returns:
 *   0        - The user does not have the required access
 *   non-zero - The user has the required access
 */
function getWritable($creator, $user)
{
  global $auth;

  // Always allowed to modify your own stuff
  if(strcasecmp($creator, $user) == 0)
  {
    return 1;
  }

  if(authGetUserLevel($user, $auth["admin"]) >= 3)
  {
    return 1;
  }

  // Unathorised access
  return 0;
}

/* showAccessDenied()
 * 
 * Displays an appropriate message when access has been denied
 * 
 * Returns: Nothing
 */
function showAccessDenied($day, $month, $year, $area, $room)
{
  global $HTTP_REFERER;

  print_header($day, $month, $year, $area, isset($room) ? $room : "");
?>
  <h1><?php echo get_vocab("accessdenied")?></h1>
  <p>
   <?php echo get_vocab("norights")?>
  </p>
  <p>
    <a href="<?php echo htmlspecialchars($HTTP_REFERER); ?>">
      <?php echo get_vocab("returnprev"); ?>
    </a>
  </p>
 </body>
</html>
<?php
}
?>

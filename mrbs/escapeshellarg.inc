<?php

/* $Id: escapeshellarg.inc 798 2008-04-13 19:59:24Z jberanek $
 *
 * Included if your PHP version is less than 4.0.3 and therefore this
 * function doesn't exist.
 *
 */

function escapeshellarg($x)
{
  return "'".ereg_replace("'", "'\\''", $x)."'";
} 

?>

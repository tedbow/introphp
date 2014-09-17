<?php
/**
 * Author: Ted Bowman
 * Date: 9/17/14
 * Time: 2:07 PM
 */

$var = array();
$var2 = FALSE;
// ALL FALSE 0,'0','',array(), '0.0', FALSE, NULL,
if (isset($var3)) {
  echo "FALSE";
}
else {
  echo "noT FALSE!!!";

}

$a = array(
  'this' => 'onalsokfd',
  'that' => 'aksdjfjasdfkj',
);
if (isset($a['other']) && $a['other'] == 'onalsokfd') {
  echo 'equals';
}
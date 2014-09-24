<?php
/**
 * Author: Ted Bowman
 * Date: 9/17/14
 * Time: 11:48 AM
 */

/*
 * Solved version.
 */
function toHTMLString($input) {
  $type = gettype($input);

  switch ($type) {
    case 'boolean':
      $input = !empty($input) ? 'TRUE' : 'FALSE';
      break;
    case 'array':
      $input = implode(',', $input);
      break;
    default:
      return $input;
  }
  //echo "type=$type<br>";

  return $input;
}
$vars = array(
  FALSE,
  TRUE,
  0,
  1,
  '1',
  1.1,
  array(),
  array('this','that','other'),
);
foreach ($vars as $var) {
  echo "<br>output=" . toHTMLString($var);
}
/****** This page currently outputs
output=
output=0
output=1
output=Array
output=Array
/******* Change the toHTMLString function so that this page outputs to the browser
output=FALSE
output=0
output=1
output=
output=this,that,other
 */



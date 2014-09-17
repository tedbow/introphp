<?php
/**
 * Author: Ted Bowman
 * Date: 9/17/14
 * Time: 11:48 AM
 */



function toHTMLString($input) {
  return $input;
}
$vars = array(
  FALSE,
  0,
  1,
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



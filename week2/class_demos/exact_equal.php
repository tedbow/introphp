<?php
/**
 * Author: Ted Bowman
 * Date: 9/19/14
 * Time: 1:56 PM
 */

$false = FALSE;
$zero = 0;

if ($false == $zero) {
  echo "it passed";
}

$blank = '';

if ($false == $blank) {
  echo "it passed";
}
$zero_float = 0.0;

if ($zero === $zero_float ) {
  echo "it passed";
}
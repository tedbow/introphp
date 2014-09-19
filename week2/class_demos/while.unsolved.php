<?php
/**
 * Author: Ted Bowman
 * Date: 9/19/14
 * Time: 12:18 PM
 */

function is_the_one($arg) {
  if ($arg == 'the one') {
    return TRUE;
  }
  else {
    return FALSE;
  }
}
$haystack = array(
  1,
  'the other',
  'another',
  'still another',
  'the one',
  'yet one more',
);
<?php
/**
 * Author: Ted Bowman
 * Date: 9/17/14
 * Time: 11:34 AM
 */

$strings = array(
  'The fox is grey.',
  'The dog is grey.',
  'Fox? I haven\'t seen a fox',
);
foreach ($strings as $string) {
  echo "<br><br>**Checking '$string':";
  $strpos = stripos($string, 'fox');
  // Fix these if statements to work with all strings.(don't change the function call above)
  if ($strpos) {
    echo "<br>'$string' contains 'fox'";
  }
  if (!$strpos) {
    echo "<br>'$string' does NOT contains 'fox'";
  }
}

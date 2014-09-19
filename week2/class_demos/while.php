<?php
/**
 * Author: Ted Bowman
 * Date: 9/19/14
 * Time: 11:15 AM
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
/*$loop_count = 0;
$haystack_copy = $haystack;
while ($current = array_shift($haystack_copy)) {
  echo ++$loop_count . "<br>";
  if (is_the_one($current)) {
    echo "found THE ONE<br>";
    break;
  }
  echo "$current is not THE ONE!<br>";
}
var_dump($haystack_copy);*/
// super short
$haystack_copy = $haystack;

while(($current = array_shift($haystack_copy)) && !is_the_one($current));
echo "found it -> $current\n";
var_dump($haystack_copy);
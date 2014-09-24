<?php
/**
 * Author: Ted Bowman
 * Date: 9/19/14
 * Time: 12:15 PM
 */

$a = array(
  'node' => array('nid' => 234, 'uid' => 231, 'title' => 'My Blog post'),
  'user' => array('uid' => 1, 'name' => 'Clark Kent', 'email' => 'me@me.com'),
  '#access' => FALSE,
  '#render_function' => 'my_render_function',
);
var_dump($a);
$children_only = element_children_values($a);
//echo $children_only;
var_dump($children_only);
/**
 * Returns an array with only the "child" values(keys that don't start with '#'
 * @param $array
 */
function element_children_values($elements) {
  // @todo lets figure this out
  $return_array = array();
  foreach ($elements as $key => $value)  {

    echo "key = $key<br>";
    //$pos = strpos($key, '#');
    //echo "pos = $pos<br>";
    //echo gettype($pos) . '<br>';
    if (is_child_key($key)) {
      // This is key is a child key
      $return_array[$key] = $value;

    }
  }
  return $return_array;

}
/**
 * Returns an array with only the "non-child" values(keys that DO start with '#'
 * @param $array
 */
function element_children_properties($array) {
  // @todo lets figure this out
  return $array;
}

/**
 * Determine if a string is "child" key.
 * @param string $key
 *  Key string to check
 * @return boolean
 */
function is_child_key($key) {
  $pos = strpos($key, '#');
  if ($pos === 0) {
    return FALSE;
  }
  return TRUE;
}
/*
$return = array(
  'node' => array('nid' => 234, 'uid' => 231, 'title' => 'My Blog post'),
  'user' => array('uid' => 1, 'name' => 'Clark Kent', 'email' => 'me@me.com'),

);
*/
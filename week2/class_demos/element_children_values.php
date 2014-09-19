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
/**
 * Returns an array with only the "child" values(keys that don't start with '#'
 * @param $array
 */
function element_children_values($array) {
  // @todo lets figure this out
  return $array;
}
/**
 * Returns an array with only the "non-child" values(keys that DO start with '#'
 * @param $array
 */
function element_children_values($array) {
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
  return TRUE;
}
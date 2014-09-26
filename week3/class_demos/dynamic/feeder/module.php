<?php
/**
 * Author: Ted Bowman
 * Date: 9/26/14
 * Time: 12:30 PM
 */

/**
 * @todo Complete module.form_maker_create_form
 * New "feeder" module like "content" or form_maker
 * 1. Shows form that asks for "Feed URL"
 * 2. On submit check URL was input
 * 3. Show error message if no URL
 * 4. If URL call feeder_get_feed_output and output HTML.
 */
require 'feeder.inc';
echo feeder_get_feed_output($_GET['feed_url']);
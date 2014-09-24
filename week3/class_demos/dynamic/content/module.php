<?php
/**
 * Author: Ted Bowman
 * Date: 9/24/14
 * Time: 2:11 PM
 */
echo "from module.php";
$file_to_include = $_GET['page'] . '.php';
require $file_to_include;

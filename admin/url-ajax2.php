<?php 
$slug = $_GET['slug'];
$uniqueSlug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($slug)));
echo $uniqueSlug;
?>
<?php

/** 
 * Template Name: Feature
 *
 */


$compiler = include('compiler.php');
$data = include('store.php');

echo $compiler->render('tmpl_feature', $data);

echo '=========================';
echo '<pre>';
print_r($data['assets']['partners']);
echo '</pre>';

?>
<?php

require_once __DIR__ . '/vendor/autoload.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$filePath = __DIR__ . '/html/html-1.html';
$html = file_get_contents($filePath);

$converter = new \Xam\Html\TextConverter();
echo $converter->convert($html);

?>

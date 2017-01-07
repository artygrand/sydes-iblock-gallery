<?php
/**
 * Simplest gallery
 * Shows images with lightbox from folder
 *
 * Usage: {iblock:gallery show="%dir/subdir%"} = dir in /upload/images folder
 * Params:
 *   limit="%num%" - limited with pagination in default template
 *   width="%num%"
 *   height="%num%" - sizes of thumbnail
 */

$defaults = [
    'show' => '',
    'limit' => 50,
    'width' => 150,
    'height' => 150,
];
$args = array_merge($defaults, $args);

if (!$args['show']) {
    if (!isset($page['show'])) {
        return;
    }
    $args['show'] = $page['show'];
}
if (!is_dir('upload/images/'.$args['show'])) {
    return;
}

$files = glob('upload/images/'.$args['show'].'/*.{jpg,JPG,jpeg,gif,png}', GLOB_BRACE);
if (empty($files)) {
    echo "Folder {$args['show']} is empty";
    return;
}

$count = count($files);
$skip = (!empty($_GET['skip']) && $_GET['skip'] > 0) ? (int)$_GET['skip'] : 0;
$result['items'] = array_slice($files, $skip, $args['limit']);

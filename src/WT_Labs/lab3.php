<?php

$filesSize = 0;

function printTableCell(string $path, int $borderline){
    echo '<tr>';
    for ($i = 0; $i < $borderline; ++$i) {
        echo '<td>-</td>';
    }
    echo '<td>'.basename($path).'</td>';
}

function getFiles(string $path, int $borderline)
{
    $saveDir = getcwd();
    chdir($path);
    printTableCell($path, $borderline);
    $files = array_diff(scandir($path), ['.', '..']);

    foreach ($files as $file){
        $buffPath = realpath($file);
        if (is_dir($buffPath)){
            getFiles($buffPath, $borderline + 1);
        } else {
            printTableCell($buffPath, $borderline+1);
            $GLOBALS['filesSize'] = $GLOBALS['filesSize'] + filesize($file);
        }
    }
    echo '</tr>';
    chdir($saveDir);
}

if (isset($_GET['file_path'])) {
    $file_path = $_GET['file_path'];
    if (file_exists($file_path)) {
        $borderline = 0;
        echo '<table id="directory-files">';
        getFiles(realpath($file_path), $borderline);
        echo '</table>';
        echo 'Overall size: '.$filesSize.' bytes<br>';
    } else {
        echo 'Invalid path '.$file_path;
    }
}
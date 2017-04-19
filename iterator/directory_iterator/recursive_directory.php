<?php

$dir = new RecursiveDirectoryIterator('common');
// using constants from the parent class FilesystemIterator
$dir->setFlags(FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);

$dir = new RecursiveIteratorIterator($dir,RecursiveIteratorIterator::SELF_FIRST);
//$dir->setMaxDepth(0);

foreach ($dir as $file) {
    echo $file.'<br>';
}


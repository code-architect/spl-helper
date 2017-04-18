<?php
/**
 * 1) Important:    FilesystemIterator uses the path as the key. Where as DirectoryIterator uses number.
 * 2) Important:    Changing the path into unix path, just add a constant to the constructor as a
 *                  second argument, FilesystemIterator::UNIX_PATHS
 * 3) Important:    Change the key to just the filename, instead of the relative path. The code is -
 *                  $dir->setFlags(FilesystemIterator::UNIX_PATHS | FilesystemIterator::KEY_AS_FILENAME);
 * 4) Important:    We can store these objects in an array, without needing to clone them as we do with DirectoryIterator
 */



//$dir = new FilesystemIterator('common/images', FilesystemIterator::UNIX_PATHS);
$dir = new FilesystemIterator('common/images');
$dir->setFlags(FilesystemIterator::UNIX_PATHS | FilesystemIterator::KEY_AS_FILENAME);
foreach ($dir as $key => $file)
{
    //echo 'Key: '.$key.' | File: '.$file.'<br>';
    $files[] = $file;
}

echo $files[1]->getFileName();
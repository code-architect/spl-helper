<?php
/**
 * 1)Important: DirectoryIterator traverses a single level of directory, providing access at the top level of the
 *              directory, including the dot files.
 * 2)Important: The current element inside the loop is neither the file nor the file name, its a
 *              DirectoryIterator object that contains a reference to the file. and to store these object to an array
 *              we need to clone each one before adding it to an array.
*/

$dir = new DirectoryIterator('common/images');
foreach ($dir as $key => $file) {
    if($file->isFile())
    {
        //echo 'key: '.$key.' | Value:'.$file.'<br>';   //getting name of the file
        //echo $file->getPathname().'<br>';   //getting the path name of the file
        //$files[] = $file->getFilename();        // saving the file name into an array
        $files[] = clone $file;
    }
}

echo $files[1]->getFileName();

<?php

$files = new FilesystemIterator('common/images', FilesystemIterator::UNIX_PATHS);

foreach($files as $file){
    if($file->getExtension() === 'jpg')
    {
        echo '"'.$file->getFileName().'" is the size of '.
                $file->getSize().
                ' bytes |  and its absolute path is "'.$file->getRealPath().'"<br>';
    }

}
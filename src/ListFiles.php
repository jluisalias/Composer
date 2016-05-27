<?php

/**
 * Created by PhpStorm.
 * User: jlalias
 * Date: 27/05/16
 * Time: 17:59
 */
class ListFiles
{
    function get_current_files()
    {
        require __DIR__.'/../../../../vendor/autoload.php';

        // the "files" directory
        $dir = '://home/jlalias/Projectos/Composer/files';

        $finder = new \Symfony\Component\Finder\Finder();
        $finder->in($dir)
            ->name('*.gif')
            ->date('since 1 day ago')
        ;
        $files = array();
        foreach ($finder as $file) {
            $files[] = $file->getFilename();
        }

        return $files;
    }
}
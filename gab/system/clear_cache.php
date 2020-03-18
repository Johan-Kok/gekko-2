<?php
/* clear cache with .cache extension */

require_once 'functions.php';

if( _G('clearcache') === 'yes' )
{
    require_once 'conf.php';
    $files = listFiles( $conf->dirs->cache );

    if( !is_array($files) ) {
        echo 'No cached files';
        exit;
    }

    foreach($files as $file)
    {
        // make sure it contains .cache extension
        if(contains('.cache', $file)) {
            unlink( $conf->dirs->cache . $file );
        }
        else {
            continue;
        }
    }

    echo 'Cache cleared';
}

else {
    echo 'E';
    die();
}
